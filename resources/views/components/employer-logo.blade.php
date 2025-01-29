@props(['employer', 'width' => '45'])

<img src="{{asset($employer->logo)}}" alt="company logo" class="bg-white/10 rounded-xl" width="{{$width}}">
