<div class="faq container">
    <div class="faq-layouting layout-spacing">
        <div class="kb-widget-section">
            <div class="row">

                @foreach ($expert_list as $expert)
                    <div class="column">
                        <div class="team-1">
                            <div class="team-img" style="text-align: center">
                                @if (!empty($expert->photo))
                                    <img src="{{ asset('profile/photos/' . $expert->photo) }}"
                                        alt="Team Image" style="height: 200px; width:200px;">
                                @else
                                    <img src="{{ asset('templete') }}/src/assets/img/demoprofile.png"
                                        alt="Team Image" style="height: 200px; width:200px;">
                                @endif
                            </div>
                            <div class="team-content">
                                <h2>{{ $expert->name }}</h2>
                                <p>{{ \Illuminate\Support\Str::limit($expert->bio, 40, $end = '...') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
