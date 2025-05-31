<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <!-- resources/views/components/banner.blade.php -->
    <!-- resources/views/components/banner.blade.php -->
    <!-- <section class="bg-gradient-to-r from-gray-900 via-black to-gray-700 text-white py-16 px-6">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Fuel Your Fitness</h1>
        <p class="text-lg md:text-xl mb-6">Premium Gym Supplements Delivered to Your Doorstep</p>
        <a href="#products" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full transition">
            Shop Now
        </a>
    </div>
</section> -->
<!-- resources/views/components/banner.blade.php -->
<div class="carousel">
    <div class="list">
        @foreach(['img1.avif', 'img2.jpeg', 'img3.avif', 'img4.avif'] as $img)
        <div class="item">
            
            <img src="{{ asset('storage/banner/'.$img) }}" alt="Fitness supplement banner {{ $loop->index + 1 }}">
            <div class="content">
                <div class="author">Fuel Your Fitness</div>
                <div class="title">Go Fit</div>
                <div class="topic">Yehh Buddy Light Weight</div>
                <div class="des">
                    Premium Gym Supplements For Strength, Performance & Recovery
                </div>
                <div class="buttons">
                    <button>See More</button>
                    <button>Join Us</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="thumbnail">
        @foreach(['img1.avif', 'img2.jpeg', 'img3.avif', 'img4.avif'] as $img)
        <div class="item">
            <img src="{{ asset('storage/banner/'.$img) }}" alt="Fitness supplement thumbnail {{ $loop->index + 1 }}">
            <div class="content">
                <div class="title">Strength Supplement {{ $loop->index + 1 }}</div>
                <div class="description">Boost your performance</div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="arrows">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>
    <div class="time"></div>
</div>

</div>