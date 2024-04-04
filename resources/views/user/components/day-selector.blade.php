<div class="pt-30px pb-30px" style="border-radius: 10px; background-color: rgb(88, 101, 242, 0.3)" ;>
    <div class="container">
        <ul class="quiz-course-nav d-flex align-items-center justify-content-between">
            @foreach(range(1, $days) as $day)
            <li>
                <a href="{{ route('user.itineraries.show', ['itinerary' => $itinerary->id, 'day' => $day]) }}" class="icon-element icon-element-sm {{ $selectedDay == $day ? 'text-white' : '' }}" style="{{ $selectedDay == $day ? 'background-color: #5865F2;' : '' }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Day {{ $day }}">
                    <i class="la la-check"></i>
                </a>
            </li>
            @endforeach
        </ul>
    </div><!-- end container -->
</div>