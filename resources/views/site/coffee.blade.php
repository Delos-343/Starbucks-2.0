<x-layout>
    <x-slot name="title"> Coffee | Starbucks 2.0 </x-slot>

    <section class="container-about">
        <br />
        <h1> Let's talk coffee </h1>
        <p>
            Whether you're searching for something new to warm your mug, seeking the best brew method for your favorite
            blend or exploring our rarest offerings, you&apos;ve come to the right place.
        </p>
        <figure>
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/coffee/lets-talk-coffee.webp') }}"
                 alt="coffee talks"/>
        </figure>
        <h2> Find your favorite at-home coffee </h2>
        <p>
            From K-Cup® Pods to Starbucks VIA® packets to our packaged coffee, we&apos;ve compiled a wide selection of coffee to fill your cup.
        </p>
        <nav>
            <a href="#" class="solid"> Browse our Coffee </a>
        </nav>

        <p>
            Still undecided? Our coffee masters have created a simple three-question quiz to help you find a Starbucks®
            coffee you&apos;re sure to love. Take our coffee quiz.
        </p>
        <nav>
            <a href="#" class="solid"> Start Quiz </a>
        </nav>

        <figure>
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/coffee/the-rarest-coffee.webp') }}"
                 alt="rare coffee"/>
        </figure>
        <h2> The rarest, most extraordinary coffees Starbucks has to offer </h2>
        <p>
            Exceptional coffees from around the world. Sourced for the season, roasted at Starbucks Reserve® Roasteries
            and crafted with care.
        </p>
        <nav>
            <a href="#"> Explore Starbucks Reserve </a>
        </nav>

        <figure>
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/coffee/how-to-brew.webp') }}"
                 alt="brewing"/>
        </figure>
        <h2> How to brew </h2>
        <p>
            Whether you&apos;re a coffee novice or a seasoned pro, we have all the tools you need to bring your brewing game
            to the next level.
        </p>
        <nav>
            <a href="#"> Learn to brew your perfect cup </a>
        </nav>

        <div class="note">
            <p> Starbucks and the Starbucks logo are registered trademarks of Starbucks Corporation used under license by Nestlé. </p>
            <p> Keurig, K-Cup, and the Keurig trade dress are trademarks of Keurig Green Mountain, Inc., used with permission. Pike Place is a trademark of The Pike Place Market PDA, used under license. </p>
        </div>
    </section>
</x-layout>