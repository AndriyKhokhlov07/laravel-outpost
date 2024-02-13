@extends('layouts.header-footer')
@section('content')
    <div class="main_width main_page">
        <div class="oc_info_block">
            <h1>Easy Move-In. Easy Living. Find your next home.</h1>
            <ul class="main_menu">
                <li class="button_li"><a class="main_butt" href="#apply_now">Apply for free</a></li>
            </ul>
            <p>Convenient locations, beautifully designed spaces and hassle-free application.All-inclusive options available.</p>
        </div>

        <div class="main_search fx">
            <a href="https://new-outpost.loc/new-houses">
                <img src="/pictures/icons/flame.svg" alt="New houses">
                <span>New Houses</span>
            </a>
            <a href="https://new-outpost.loc/manhattan" class="l_block">
                <img src="/pictures/icons/empire-state-building.svg" alt="Manhattan">
                <span>Manhattan</span>
            </a>
            <a href="https://new-outpost.loc/brooklyn">
                <img src="/pictures/icons/brooklyn-bridge.svg" alt="Brooklyn">
                <span>Brooklyn</span>
            </a>
            <a href="https://new-outpost.loc/philadelphia" class="l_block">
                <img src="/pictures/icons/liberty_bell.svg" alt="Philadelphia">
                <span>Philadelphia</span>
            </a>
        </div>

        <div class="main_width rooms">
            <div class="fx w ch2">
                <div class="room">
                    <a class="img" href="">
                        <div class="new">New</div>
                        <img class="lazy" src="pictures/pages/room.jpg" alt="Easy move-in. Easy living. Find your next home.  (Image-1)">
                    </a>
                    <a class="h2" href="">The Clark House</a>
                    <div class="annotation">Harlem, Manhattan
                        <p>Private rooms from $1450</p>
                    </div>
                </div>

                <div class="room">
                    <a class="img" href="">
                        <div class="new">New</div>
                        <img class="lazy" src="pictures/pages/room.jpg" alt="Easy move-in. Easy living. Find your next home.  (Image-1)">
                    </a>
                    <a class="h2" href="">The Gramercy Park Studios</a>
                    <div class="annotation">Harlem, Manhattan
                        <p>Private rooms from $1250</p>
                    </div>
                </div>

                <div class="room">
                    <a class="img" href="">
                        <div class="new">New</div>
                        <img class="lazy" src="pictures/pages/room.jpg" alt="Easy move-in. Easy living. Find your next home.  (Image-1)">
                    </a>
                    <a class="h2" href="">The Maison Jefferson</a>
                    <div class="annotation">Harlem, Manhattan
                        <p>Private rooms from $1550</p>
                    </div>
                </div>

                <div class="room">
                    <a class="img" href="">
                        <div class="new">New</div>
                        <img class="lazy" src="pictures/pages/room.jpg" alt="Easy move-in. Easy living. Find your next home.  (Image-1)">
                    </a>
                    <a class="h2" href="">The Cornelia House</a>
                    <div class="annotation">Harlem, Manhattan
                        <p>Private rooms from $1350</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="coliving_concept">
            <div class="content_width">
                <div class="col_title">
                    <h3 class="first_title">Coliving Houses</h3>
                    <h3 class="second_title">/Fully Furnished</h3>
                </div>
                <div class="col_paragraph">
                    <p>People of many different cultures, backgrounds and areas of ex-
                        pertise. Many of our former coColiving isn’t just about having
                        roommates or sharing a kitchen, and we want your time in one of
                        our coliving houses to be more than just a place to live and work.
                        We've built a coliving community that will give you the chance to
                        build relationships with living members are still in touch with
                        roommates around the world thanks to the relationships they
                        built at Outpost Club.
                    </p>
                </div>
            </div>

            <div class="right_text">
                <a href="/new-york" class="button2 red" data-text="Explore "></a>
            </div>
        </div>

        <div class="coliving_spaces">
            <hr class="hr">
            <img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving">
            <div class="content_width">
                <div class="col_title">
                    <h3 class="first_title">Short-term solutions</h3>
                    <h3 class="second_title">/from 5 days</h3>
                </div>
                <div class="col_paragraph">
                    <p>We know that apartments can be difficult to find if you're only
                        looking to rent for a few months, and staying in a traditional
                        hotel for months while you travel for work or school can get old
                        fast. Outpost Club's short-term solution is designed to make you
                        feel right at home, whether you're here for a few days or a few months.
                    </p>
                </div>
            </div>
            <div class="right_text">
                <a href="/new-york" class="button2 red" data-text="Explore "></a>
            </div>
        </div>

        <div class="coliving_community">
            <hr class="hr">
            <div class="content_width">
                <div class="col_title">
                    <h3 class="first_title">FULL APARTMENTS</h3>
                </div>
                <div class="col_paragraph">
                    <p>Anyone who's looked at an apartment in New York City knows
                        that no matter how well-prepared you are, you'll probably end
                        up sifting through endless Craigslist scams and Facebook
                        groups for apartments that are gone by the time you apply —
                        but not with Outpost Club. See an apartment you like? Just give
                        us a call to set up a showing and we'll take it from there. Want us
                        to find roommates for you? Let us know and we'll match you with
                        other apartment seekers.
                    </p>
                </div>
            </div>
            <div class="right_text">
                <a href="/new-york" class="button2 red" data-text="Explore "></a>
            </div>
        </div>

        <div class="oc_block">
            <hr class="hr">
            <div class="content_width">
                <div class="col_title">
                    <h3 class="first_title">HOW IT WORKS</h3>
                </div>
                <div class="col_paragraph">
                    <div class="items_experience">
                        <div class="content_row_title">
                            <input class="hide" type="checkbox" id="con_1">
                            <label class="first_item" for="con_1">1</label>
                            <p>Decide if you want housing <span>for a month or two</span> or are looking
                                for a long-term lease. If you’re not sure, just fill out our
                                short application form and one of our customer service
                                representatives will be happy to help you choose the
                                right option for your needs. You can also call 680-OUT-
                                POST and talk to one of our reps.</p>
                        </div>
                        <div class="content_row">
                            <input class="hide" type="checkbox" id="con_2">
                            <label class="item" for="con_2">2</label>
                            <p class="text">Think about furnishings: Long-term apartments and
                                rooms can be rented fully furnished in one of our coliving
                                houses, or fully unfurnished in a number of apartment
                                buildings.</p>
                        </div>
                        <div class="content_row">
                            <input class="hide" type="checkbox" id="con_3">
                            <label class="item" for="con_3">3</label>
                            <p class="text">Once you submit a short form letting us know what you're
                                interested in, our dedicated customer service team will
                                reach out with options that fit your budget and preferred
                                location. You can then decide if you'd like to see your
                                preferred option in person or virtually.</p>
                        </div>
                        <div class="content_row">
                            <input class="hide" type="checkbox" id="con_4">
                            <label class="item" for="con_4">4</label>
                            <p class="text">Once you've decided on a location, you'll simply fill out
                                our full application online and sign the required
                                paperwork — the process is fully automatic for your convenience.
                                Once you've paid a small application fee and provided
                                information for a background check (or visa information
                                for those without a social security numben), you'll
                                be ready to move in!</p>
                        </div>
                        <div class="content_row">
                            <input class="hide" type="checkbox" id="con_5">
                            <label class="item" for="con_5">5</label>
                            <p class="text">That's it! You'll be assigned a dedicated House Leader
                                who will help you move in and will ensure you have a
                                great experience over the course of your lease. No more
                                faceless communication with your management company.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="bounce_left"></div>
                <div class="triangle-bottom"></div>
                <div class="triangle_bounce">
                    <h4 class="item_title">WHO WE ARE</h4>
                    <div>
                        <p class="item_text">Outpost Club is a property management technology platform
                            that connects tenants with bed-room and apartment rentals in
                            unfurnished buildings; rents out
                            Fully furnished all-inclusive bed-rooms in coliving apartments;
                            and offers short-term rental solutions through a network of
                            long-stay hotels and residences.

                        </p>
                    </div>
                </div>

                <div class="right_text">
                    <a href="" class="button3 red" data-text="Apply for free"></a>
                </div>
{{--            </div>--}}
            </div>
        </div>

        <div class="coliving_people">
            <hr class="hr">

                <div class="content_houses">
                    <div class="items_experience">
                        <div class="content_row">
                            <input class="hide" type="checkbox" id="comfort">
                            <div class="text img"><img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving"></div>
                            <label class="item" for="comfort">COMFORT</label>
                            <p class="text">Our coliving spaces are stylish by design,
                                all newly renovated and including modern
                                appliances, central air, spacious common
                                areas, outdoor space and private or shared
                                bedrooms, depending on your budget.</p>
                        </div>
                        <div class="content_row">
                            <input class="hide" type="checkbox" id="community">
                            <div class="text img"><img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving"></div>
                            <label class="item" for="community">COMMUNITY</label>
                            <p class="text">Our members come from all over the
                                world to live in our coliving spaces, reflecting the diversity of New York. Members are
                                connected with a network of successful
                                individuals, creatives, entrepreneurs, investors, executives and experts in many fields.</p>
                        </div>
                        <div class="content_row">
                            <input class="hide" type="checkbox" id="conveniens">
                            <div class="text img"><img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving"></div>
                            <label class="item" for="conveniens">CONVENIENCE</label>
                            <p class="text">We offer affordable housing accommodations
                                with all-inclusive prices, allowing our
                                members to have a successful living and
                                working experience without the hassles of moving into a new apartment. Our locations are all
                                in great neighborhoods with nearby public transportation, entertainment, shopping and dining.</p>
                        </div>
                    </div>
                </div>

                <div class="peoples_feedback">
                    <div class="item left">
                        <div class="triangle-bottomleft"></div>
                        <img class="item_img" src="pictures/blog/brooke.300x300.png" alt="Coliving">
                        <div>
                            <h4 class="item_title">Jenni about The Maison Jefferson</h4>
                            <p class="item_text">Staying with outpost is an experience I will never forget. The houses are everything you need but what is</p>
                        </div>
                    </div>
                    <div class="item center">
                        <div class="triangle-bottom"></div>
                        <h4 class="item_title">Review from Brooke about The Maison Jefferson</h4>
                        <div>
                            <img class="item_img" src="pictures/blog/brooke.300x300.png" alt="Coliving">
                            <p class="item_text">Staying with outpost is an experience I will never forget. The houses are everything you need but what is truly special is the sense of community fostered here. It is</p>
                        </div>
                    </div>
                    <div class="item right">
                        <div class="triangle-topright"></div>
                        <h4 class="item_title">Finn about The Maison Jefferson</h4>
                        <div>
                            <img class="item_img" src="pictures/blog/brooke.300x300.png" alt="Coliving">
                            <p class="item_text">Staying with outpost is an experience I will never forget. The houses are everything you need but what is</p>
                        </div>
                    </div>
                </div>
                <div class="content_bottom">
                    <div>
                        <h3 class="first_title">What people</h3>
                        <h3 class="second_title">Are saying:</h3>
                    </div>
                    <a href="/join-us" data-text="More"></a>
                </div>
            <hr class="hr">
        </div>

        <div class="coliving_blog">
            <h3 class="first_title">Latest Outpost Club Posts</h3>
            <div class="blog_content">
                <div class="item first_post">
                    <div class="preview">
                        <h4 class="item_title"><a href="blog/the-best-restaurants-in-hells-kitchen">The Best Restaurants in Hell's Kitchen</a></h4>

                        <a class="more" href="blog/the-best-restaurants-in-hells-kitchen">
                            <img class="blog_arrow" src="pictures/arrow-right-black.svg">
                            <img class="blog_arrow-down" src="pictures/arrow-down.svg">
                        </a>
                    </div>
                    <a class="img" href="blog/the-best-restaurants-in-hells-kitchen">
                        <img src="pictures/blog/stephen-bedase.jpg" alt="The Best Restaurants in Hell's Kitchen">
                    </a>
                </div>
                <div class="item second_post">
                    <div class="preview">
                        <h4 class="item_title"><a href="blog/5-tips-for-nailing-new-years-resolutions">5 Tips For Nailing New Year's Resolutions</a></h4>

                        <a class="more" href="blog/5-tips-for-nailing-new-years-resolutions">
                            <img class="blog_arrow" src="pictures/arrow-right-black.svg">
                            <img class="blog_arrow-down" src="pictures/arrow-down.svg">
                        </a>
                    </div>
                    <a class="img" href="blog/5-tips-for-nailing-new-years-resolutions">
                        <img src="pictures/blog/roven-images.jpg" alt="5 Tips For Nailing New Year's Resolutions">
                    </a>
                </div>
                <div class="item third_post">
                    <div class="preview">
                        <h4 class="item_title"><a href="blog/how-to-stay-on-budget-in-nyc">How to Stay on Budget in NYC</a></h4>

                        <a class="more" href="blog/how-to-stay-on-budget-in-nyc">
                            <img class="blog_arrow" src="pictures/arrow-right-black.svg">
                            <img class="blog_arrow-down" src="pictures/arrow-down.svg">
                        </a>
                    </div>
                    <a class="img" href="blog/how-to-stay-on-budget-in-nyc">
                        <img src="pictures/blog/bruno-martins.jpg" alt="How to Stay on Budget in NYC">
                    </a>
                </div>
            </div>
            <a class="more_info" href="/join-us" data-text="More"></a>
        </div>

{{--        <div class="main_width center find_us">--}}
{{--            <p class="h1">Find us on...</p>--}}
{{--            <div class="partners_slider">--}}
{{--                <div class="item">--}}
{{--                    <a href="https://www.forbes.com/sites/ranagood/2020/01/28/outpost-making-long-term-city-travel-reality/#a34a44991a0e" target="_blank" rel="nofollow noopener noreferer">--}}
{{--                        <img src="pictures/forbes.svg" title="Easy move-in. Easy living. Find your next home. (Image-10), outpost-club.com" alt="Easy move-in. Easy living. Find your next home.  (Image-10)" >--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <!-- <a href="https://www.nytimes.com/2019/12/23/realestate/sharing-a-room-in-bedford-stuyvesant-and-making-new-friends.html" target="_blank" rel="nofollow noopener noreferer"> -->--}}
{{--                    <a href="https://drive.google.com/file/d/18FPOeyiBtY5n-NKy8DhSn5ZBuhA_9Bwr/view?usp=share_link">--}}
{{--                        <img src="pictures/new-york-city-logo.png" title="Press (Image-4), outpost-club.com" alt="Press (Image-4)" >--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <a href="https://www.nytimes.com/2019/12/23/realestate/sharing-a-room-in-bedford-stuyvesant-and-making-new-friends.html" target="_blank" rel="nofollow noopener noreferer">--}}
{{--                        <img src="pictures/new-york-city-logo.png" title="Easy move-in. Easy living. Find your next home. (Image-11), outpost-club.com" alt="Easy move-in. Easy living. Find your next home.  (Image-11)" >--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <a href="https://www.foxbusiness.com/real-estate/co-living-real-estate-trend-has-renters-saving-thousands?fbclid=IwAR3G8nt2xCNOJr01TjFhmHq0LT5ZjrxLZtyYyT-wBGvNsfyDt6tsDfFngsg" target="_blank" rel="nofollow noopener noreferer">--}}
{{--                        <img src="pictures/fox.png" title="Easy move-in. Easy living. Find your next home. (Image-12), outpost-club.com" alt="Easy move-in. Easy living. Find your next home.  (Image-12)" >--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <a href="https://medium.com/qwerkycoliving/the-worlds-first-coliving-conference-co-liv-review-85e8d1a7ac09" target="_blank" rel="nofollow noopener noreferer">--}}
{{--                        <img src="pictures/icons/medium.svg" title="Easy move-in. Easy living. Find your next home. (Image-13), outpost-club.com" alt="Easy move-in. Easy living. Find your next home.  (Image-13)" >--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <a href="https://coliving.com/blog/breaking-the-preconceived-notions-of-coliving" target="_blank" rel="nofollow noopener noreferer">--}}
{{--                        <img src="pictures/icons/coliving_logo.svg" title="Easy move-in. Easy living. Find your next home. (Image-14), outpost-club.com" alt="Easy move-in. Easy living. Find your next home.  (Image-14)" >--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <div>--}}
{{--                        <img src="pictures/dislocation.jpg" title="Easy move-in. Easy living. Find your next home. (Image-15), outpost-club.com" alt="Easy move-in. Easy living. Find your next home.  (Image-15)" >--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <a href="http://au.blurb.com/" target="_blank" rel="nofollow noopener noreferer">--}}
{{--                        <img src="pictures/blurb-logo.png" title="Easy move-in. Easy living. Find your next home. (Image-16), outpost-club.com" alt="Easy move-in. Easy living. Find your next home.  (Image-16)" >--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
@endsection
