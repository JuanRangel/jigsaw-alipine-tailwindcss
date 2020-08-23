@extends('_layouts.master')

@push('styles')
    <style>
        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            border-radius: 5px;
        }

        @keyframes twinkle {
            0% {
                transform: scale(1, 1);
                background: rgba(255, 255, 255, 0);
                animation-timing-function: linear;
            }
            40% {
                transform: scale(0.8, 0.8);
                background: rgba(255, 255, 255, 1);
                animation-timing-function: ease-out;
            }
            80% {
                background: rgba(255, 255, 255, 0);
                transform: scale(1, 1);
            }
            100% {
                background: rgba(255, 255, 255, 0);
                transform: scale(1, 1);
            }
        }
    </style>
@endpush

@section('body')
    <section
            class="homescreen m-0 flex flex-col w-screen justify-center bg-gray-800 h-screen text-gray-100 "
    >
        <nav>
            <ul class="flex justify-between text-xl py-8 px-8 md:px-48 ">
                <li>
                    LOGO
                </li>
                <li>
                    <a href="https://github.com/Icesofty" target="_blank" rel="noopener noreferrer">Made with 💚 by IceSofty</a>
                </li>
            </ul>
        </nav>

        <h1 class="text-6xl  my-auto mx-auto  md:mx-48 ">
            Delightful <br/>
            <span class="text-teal-400">Web Templates.</span>
        </h1>
    </section>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        for (var i = 0; i < 100; i++) {
            var star =
                '<div class="star m-0" style="animation: twinkle ' +
                (Math.random() * 5 + 5) +
                's linear ' +
                (Math.random() * 1 + 1) +
                's infinite; top: ' +
                Math.random() * $(window).height() +
                'px; left: ' +
                Math.random() * $(window).width() +
                'px;"></div>';
            $('.homescreen').append(star);
        }
    </script>
@endpush
