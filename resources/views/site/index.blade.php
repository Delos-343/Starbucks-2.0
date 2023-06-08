<x-layout>
    <x-slot name="title"> Home | Starbucks 2.0 </x-slot>
    <section class="home">
        <div class="content-home green">
            <div class="starbucks">
                <div class="list">
                    <div class="photo">
                        <img alt="Four reusable cups on a mint green background with green leaves." class="block" src="{{ \Illuminate\Support\Facades\URL::asset('/images/starbucks_cups.webp') }}">
                    </div>
                </div>
                <div class="list">
                    <div class="desc">
                        <h1> Sign up for Starbucks<span>®</span> Rewards </h1>
                        <p>
                            Starting 4/22, get 25 Stars when you bring your clean, reusable cup into the café. Stars can quickly add up to Rewards.*
                        </p>
                        <button><h3> Join Now </h3></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-home">
            <div class="content-home-bottom">
                <p>
                    <br> <br>
                    *At participating stores.
                    <br> <br>
                </p>
                <p>
                    <br> <br>
                    Following CDC guidance, facial coverings are recommended in our stores
                    <br>
                    for all customers, and are required where mandated by local law.
                    <br> <br>
                    Learn more at # and #.
                    <br>
                </p>
            </div>
        </div>
    </section>
</x-layout>