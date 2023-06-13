<x-layout>
    <x-slot name="title"> Home | Starbucks 2.0 </x-slot>
    <section class="home">

        <div class="content-home green-2 font-white">
            <div class="celeb">
                <div class="list">
                    <div class="desc">
                        <h2> Find your adventure </h2>
                        <br />
                        <p> Starbucks® Summer Game is here! Play for your chance to win&mdash;more than 10 million prizes are up for grabs!* </p>
                        <button class="btn-white"> Play Now </button>
                    </div>
                </div>
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/starbucks_summer-game.jpg') }}" alt="home 1" />
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home green">
            <div class="celeb">
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/starbucks_father-day.jpg') }}" alt="home 2" />
                    </div>
                </div>
                <div class="list">
                    <div class="desc">
                        <h1> 50 YEARS, TOGETHER </h1>
                        <br />
                        <p> Since 1971, you’ve helped us see what’s possible. Every cup, every conversation, every day. Cheers to you. </p>
                        <button> Explore </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home green-2 font-white">
            <div class="celeb">
                <div class="list">
                    <div class="desc">
                        <h2> 50 YEARS, TOGETHER </h2>
                        <br />
                        <p> Since 1971, you’ve helped us see what’s possible. Every cup, every conversation, every day. Cheers to you. </p>
                        <button class="btn-white"> Explore </button>
                    </div>
                </div>
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-2.webp') }}" alt="home 2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home green">
            <div class="celeb">
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-3.webp') }}" alt="home 3" />
                    </div>
                </div>
                <div class="list">
                    <div class="desc">
                        <h2> Estamos unidos — We are united </h2>
                        <br />
                        <p> This Latinx Heritage Month, learn about the many ways our Latinx partners (employees) embrace their cultures. See how we are united in our diversity. </p>
                        <button> Find out more </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home choco">
            <div class="celeb">
                <div class="list">
                    <div class="desc">
                        <h2> NEW DAY YOUR WAY </h2>
                        <br />
                        <p> Nitro Cold Brew: cold brew infused with nitrogen for a coffee with cascading, velvety crema. For a creamy twist, try it with Vanilla Sweet Cream. </p>
                        <button> Order now </button>
                    </div>
                </div>
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-4.png') }}" alt="home 4" />
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home">
            <div class="celeb">
                <div class="list">
                    <div class="reward left green">
                        <div class="foto">
                            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-5.jpg') }}" alt="home 5" />
                        </div>
                        <h3> Earning 4,500 Bonus Stars is Super Starifying </h3>
                        <p> With a $0 intro annual fee for your first year, earn more Stars and even more Rewards with the Starbucks® Rewards Visa® Card. </p>
                        <a href="#"> Learn more </a>
                    </div>
                </div>
                <div class="list">
                    <div class="reward right green">
                        <div class="foto">
                            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/home-6.webp') }}" alt="home 6" />
                        </div>
                        <h3> Fall into an easier routine </h3>
                        <p> Get your favorites, your way—order, pay and pick up with the app. </p>
                        <a href="#"> See pickup options </a>
                    </div>
                </div>
            </div>
            <div class="note">
                *NO PURCHASE NECESSARY. Participating stores only. Starbucks Partners (employees) are not eligible to win prizes. Ends 6/18/23. To play and for Official Rules visit starbuckssummergame.com.
                Entrants can receive a maximum of 2 plays per day, plus, bonus opportunities to earn additional plays.
            </div>
        </div>
    </section>
</x-layout>