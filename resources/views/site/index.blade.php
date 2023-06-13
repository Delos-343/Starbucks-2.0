<x-layout>
    <x-slot name="title"> Home | Starbucks 2.0 </x-slot>
    <section class="home">

        <div class="content-home green font-white">
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

        <div class="content-home purple">
            <div class="celeb">
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/starbucks_father-day.jpg') }}" alt="home 2" />
                    </div>
                </div>
                <div class="list">
                    <div class="desc">
                        <h1> For the top Pop in your life </h1>
                        <br />
                        <p> This Father’s Day, show your appreciation for all he does with a thoughtful Starbucks eGift. </p>
                        <button> Send an eGift </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home pink">
            <div class="celeb">
                <div class="list">
                    <div class="desc">
                        <h2> Cinnamon caramel smooth </h2>
                        <br />
                        <p> Our new Cinnamon Caramel Cream Nitro Cold Brew is ready on tap and topped with silky cold foam. </p>
                        <button> Order now </button>
                    </div>
                </div>
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/starbucks_cinnamon-caramel.jpg') }}" alt="home 2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home green-2">
            <div class="celeb">
                <div class="list">
                    <div class="foto">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/starbucks_feta-wrap.jpg') }}" alt="home 3" />
                    </div>
                </div>
                <div class="list">
                    <div class="desc">
                        <h2> Get there satisfied </h2>
                        <br />
                        <p> Fill up on the way with a Spinach, Feta & Egg White Wrap or Bacon, Sausage & Egg Wrap. </p>
                        <button> Order now </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-home pink">
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
            <div class="note">
                *NO PURCHASE NECESSARY. Participating stores only. Starbucks Partners (employees) are not eligible to win prizes. Ends 6/18/23. To play and for Official Rules visit starbuckssummergame.com.
                Entrants can receive a maximum of 2 plays per day, plus, bonus opportunities to earn additional plays.
            </div>
        </div>
    </section>
</x-layout>