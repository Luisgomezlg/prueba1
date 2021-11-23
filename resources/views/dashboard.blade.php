<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Iron Man') }}
        </h2>
    </x-slot>

    <div class="">
        <img class="position-relative" src="images/iron-man.jpg" alt="">
        <div id="votacion" class="row votacion" class="position-absolute" style="z-index: 1;">
            <div class="col-sm-12">
                <div id="app">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="miBarra">
                        <span class='right'>0%</span>
                        <div></div>
                    </div>
                    <p>Indica el %: <input type="number" min="0" max="100" value="0"></p>
                </div>
            </div>
        </div>
</x-app-layout>
<!--<script>
    var color1 = document.getElementsByClassName('fa-thumbs-up')[0];
    var color2 = document.getElementsByClassName('fa-thumbs-down')[0];
    var ratings = [color1, color2];

    function like(s) {
        for (var i = 1; i >= s; i++) {
            var bar = document.querySelector(".miBarra div") + i;
            var desc = document.querySelector(".miBarra span") + i;
            document.querySelector(".miBarra div").style.width = i + "%";
            document.querySelector(".miBarra span").innerHTML = i + "%";
        }
        color1.style.background = color1.style.background === 'blue' ? 'black' : 'blue';
        color2.style.background = 'black';
    }

    function dislike(n) {
        color1.style.background = 'black';
        color2.style.background = color2.style.background === 'red' ? 'black' : 'red';
    }
</script>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <img src="images/iron-man.jpg" alt="">
            </div>
        </div>
-->