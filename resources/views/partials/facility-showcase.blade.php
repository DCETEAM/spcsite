@php
    $facilities = \App\Models\Facility::orderBy('id')->get();
    $facilityTotal = $facilities->count();
    $facilityIcons = ['fa-industry', 'fa-print', 'fa-warehouse', 'fa-cogs', 'fa-truck-fast'];
    $cleanText = static function (?string $value): string {
        if ($value === null || $value === '') {
            return '';
        }
        $value = iconv('UTF-8', 'UTF-8//IGNORE', $value) ?: '';
        return preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $value) ?? '';
    };
@endphp

<section class="facility-page">
    <div class="container">
        <nav class="facility-breadcrumb" aria-label="breadcrumb">
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li class="active" aria-current="page">Our Facilities</li>
            </ol>
        </nav>

        @if($facilityTotal > 0)
        <div class="facility-showcase">
            <aside class="facility-sidebar" role="tablist">
                @foreach($facilities as $facility)
                    @php
                        $facilityTitle = $cleanText($facility->title);
                    @endphp
                    <button type="button"
                            class="facility-nav-item {{ $loop->first ? 'active' : '' }}"
                            data-tab="{{ $loop->iteration }}"
                            role="tab"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        <span class="facility-nav-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="facility-nav-title">{{ $facilityTitle }}</span>
                    </button>
                @endforeach
            </aside>

            <div class="facility-panels">
                @foreach($facilities as $facility)
                    @php
                        $facilityTitle = $cleanText($facility->title);
                        $facilityDescription = $cleanText($facility->description);
                        $featureLines = $facility->features
                            ? array_values(array_filter(array_map(static fn ($line) => $cleanText(trim($line)), explode("\n", $facility->features))))
                            : [];
                        $featureCount = count($featureLines);
                        $kickerLabel = strtoupper(\Illuminate\Support\Str::before($facilityTitle, ' '));
                    @endphp
                    <div class="facility-panel {{ $loop->first ? 'active' : '' }}"
                         data-tab="{{ $loop->iteration }}"
                         role="tabpanel">

                        <div class="facility-card">
                            <div class="facility-card-visual">
                                <span class="facility-card-counter">
                                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }} / {{ str_pad($facilityTotal, 2, '0', STR_PAD_LEFT) }}
                                </span>
                                @if($facility->image)
                                    <img src="{{ asset('storage/'.$facility->image) }}" alt="{{ $facilityTitle }}">
                                @else
                                    <i class="fas {{ $facilityIcons[($loop->index) % count($facilityIcons)] }} facility-card-icon" aria-hidden="true"></i>
                                @endif
                            </div>

                            <div class="facility-card-body">
                                <span class="facility-card-kicker">
                                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }} - {{ $kickerLabel }}
                                </span>
                                <h2 class="facility-card-title">{{ $facilityTitle }}</h2>
                                <p class="facility-card-desc">{{ $facilityDescription }}</p>

                                @if($featureCount > 0)
                                <ul class="facility-feature-list">
                                    @foreach($featureLines as $line)
                                        @php
                                            $line = preg_replace('/^[\x{2713}\x{2714}]\s*/u', '', $line);
                                            if (preg_match('/^(.+?)\s*[-\x{2013}\x{2014}]\s*(.+)$/u', $line, $m)) {
                                                $fTitle = trim($m[1]);
                                                $fDesc = trim($m[2]);
                                            } else {
                                                $fTitle = $line;
                                                $fDesc = '';
                                            }
                                        @endphp
                                        <li>
                                            <span class="facility-feature-icon" aria-hidden="true">
                                                <i class="fas fa-bucket"></i>
                                            </span>
                                            <span>
                                                @if($fDesc)
                                                <strong>{{ $fTitle }}</strong> - {{ $fDesc }}
                                                @else
                                                <strong>{{ $fTitle }}</strong>
                                                @endif
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                                @endif

                                <div class="facility-stats">
                                    <div class="facility-stat">
                                        <span class="facility-stat-bar" aria-hidden="true"></span>
                                        <span>
                                            <div class="facility-stat-value">{{ $featureCount > 0 ? $featureCount . '+' : '65+' }}</div>
                                            <div class="facility-stat-label">Key Capabilities</div>
                                        </span>
                                    </div>
                                    <div class="facility-stat">
                                        <span class="facility-stat-bar" aria-hidden="true"></span>
                                        <span>
                                            <div class="facility-stat-value">100%</div>
                                            <div class="facility-stat-label">Batch Inspection</div>
                                        </span>
                                    </div>
                                </div>

                                @if($featureCount > 0)
                                <div class="facility-tags">
                                    @foreach(array_slice($featureLines, 0, 3) as $tag)
                                        <span class="facility-tag">{{ \Illuminate\Support\Str::before($tag, '-') ?: $tag }}</span>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('.facility-nav-item');
    const panels = document.querySelectorAll('.facility-panel');

    navItems.forEach(item => {
        item.addEventListener('click', function () {
            const tabId = this.dataset.tab;

            navItems.forEach(n => {
                n.classList.remove('active');
                n.setAttribute('aria-selected', 'false');
            });
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');

            panels.forEach(p => p.classList.remove('active'));
            document.querySelector('.facility-panel[data-tab="' + tabId + '"]')?.classList.add('active');
        });
    });

    window.addEventListener('scroll', () => {
        document.getElementById('header')?.classList.toggle('scrolled', window.scrollY > 40);
    });
});
</script>
