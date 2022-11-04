@extends('Site3.master')

@section('content')
    <!-- Awards-->
    <section class="resume-section" id="awards">
        <div class="resume-section-content">
            <h2 class="mb-5">Awards & Certifications</h2>
            <ul class="fa-ul mb-0">
                @foreach ($Certifications as $item)
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>


@stop

@section('tilte', 'Awards | Resume')
