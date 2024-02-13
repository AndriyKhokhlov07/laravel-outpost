@extends('layouts.header-footer')
@section('content')
    <div class="main_width">
        <div class="outpost_blog">
            <h1>Outpost Coliving Blog</h1>
            <p>Stay up-to-date on outpost's activities!</p>

            <div class="path" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <div itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a href="https://new-outpost.loc/" itemprop="item"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1">
                </div>
                <div itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a href="https://new-outpost.loc/blog" itemprop="item"><span itemprop="name">Blog</span></a>
                    <meta itemprop="position" content="2">
                </div>
            </div>

            <hr class="hr">
            <img class="coliving_img" src="pictures/pages/coliving-com.jpg" alt="Coliving">
        </div>
        <div class="outpost_coliving_blog">
            <div class="content_width">
                <div class="col_title">
                    <h3 class="first_title">Outpost</h3>
                    <h3 class="second_title">Coliving Blog</h3>
                </div>
                <div class="col_paragraph">
                    <p>Keep up with coliving news, Outpost Club events, new locations,
                        cool things our members are doing and more with the Outpost
                        Coliving Blog.</p>
                </div>
            </div>
            <div class="blog_content">
                <div class="blog_list first">
                    <div class="item first_post">
                        <a class="img" href="blog/how-to-stay-on-budget-in-nyc">
                            <img src="pictures/blog/bruno-martins.jpg" alt="How to Stay on Budget in NYC">
                        </a>
                        <div class="preview">
                            <h4 class="item_title"><a href="blog/the-best-restaurants-in-hells-kitchen">7 Things to do in NYC <span>this Valentine's day</span></a></h4>
                            <span class="user_post">by Quinn Gawronski /Feb 10, 2022</span>
                            <p class="item_text">While a candelit romantic dinner at your favorite New York City
                                restaurant might be your go-to for Valentine's Day, if you're
                                aiming to impress we emplore you to venture...</p>
                        </div>
                    </div>
                    <div class="item second_post">
                        <a class="img" href="blog/the-best-restaurants-in-hells-kitchen">
                            <img src="pictures/blog/stephen-bedase.jpg" alt="The Best Restaurants in Hell's Kitchen">
                        </a>
                        <div class="preview">
                            <h4 class="item_title"><a href="blog/5-tips-for-nailing-new-years-resolutions">How to stay on budget <span>in NYC</span></a></h4>
                            <span class="user_post">by Quinn Gawronski /Feb 10, 2022</span>
                            <p class="item_text">While a candelit romantic dinner at your favorite New York City
                                restaurant might be your go-to for Valentine's Day, if you're
                                aiming to impress we emplore you to venture...</p>
                        </div>
                    </div>
                </div>
                <div class="blog_list second">
                    <div class="item third_post">
                        <a class="img" href="blog/how-to-stay-on-budget-in-nyc">
                            <img src="pictures/blog/nailing_new_years1.jpg" alt="How to Stay on Budget in NYC">
                        </a>
                        <div class="preview">
                            <h4 class="item_title"><a href="blog/how-to-stay-on-budget-in-nyc">5 tips for nailing new year's <span>resolutions</span></a></h4>
                            <span class="user_post">by Quinn Gawronski /Feb 10, 2022</span>
                            <p class="item_text">Once the clock strikes midnight on December 31st, we welcome
                                a New Year, filled with possibility and hope. And with some ded-
                                ication, many set out to accomplish new goals in the form of</p>
                        </div>
                    </div>
                    <div class="item fourth_post">
                        <a class="img" href="blog/how-to-stay-on-budget-in-nyc">
                            <img src="pictures/blog/nailing_new_years.jpg" alt="How to Stay on Budget in NYC">
                        </a>
                        <div class="preview">
                            <h4 class="item_title"><a href="blog/how-to-stay-on-budget-in-nyc">5 tips for nailing new year's <span>resolutions</span></a></h4>
                            <span class="user_post">by Quinn Gawronski /Feb 10, 2022</span>
                            <p class="item_text">Once the clock strikes midnight on December 31st, we welcome
                                a New Year, filled with possibility and hope. And with some ded-
                                ication, many set out to accomplish new goals in the form of</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="our_houses">
            <h3 class="first_title">Our Houses:</h3>
            <div class="content_houses">
                <div class="house_item">
                    <img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving">
                    <div class="col_paragraph">
                        <h4 class="item_title">Harlem,</h4>
                        <span>Manhattan</span>
                    </div>
                    <span class="item_price">Private rooms from $1450</span>
                </div>
                <div class="house_item">
                    <img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving">
                    <div class="col_paragraph">
                        <h4 class="item_title">Woodbine,</h4>
                        <span>Queens</span>
                    </div>
                    <span class="item_price">Private rooms from $1500</span>
                </div>
                <div class="house_item last">
                    <img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving">
                    <div class="col_paragraph">
                        <h4 class="item_title">Greenpoint,</h4>
                        <span>Brooklin</span>
                    </div>
                    <span class="item_price">Private rooms from $1390</span>
                </div>
            </div>

            <hr class="hr">
            <img class="coliving_img" src="pictures/pages/wht-is-coliving-3.1600x1600.jpg" alt="Coliving">
        </div>

        <div class="follow_us">
            <div class="content_width">
                <div class="social_networks">
                    <h3 class="first_title">Follow Us</h3>
                    <a href="http://www.facebook.com/outpostclubNY/" data-tooltip="Facebook" target="_blank" rel="nofollow noopener noreferer">
                        <img src="pictures/facebook-logo.svg" alt="Outpost facebook">
                    </a>
                    <a href="https://www.instagram.com/outpostcoliving/?utm_source=outpost" data-tooltip="Instagram" target="_blank" rel="nofollow noopener noreferer">
                        <img src="pictures/instagram_w.svg" alt="Outpost instagram">
                    </a>
                </div>
                <div class="sign_news_block">
                    <input type="text" class="sign_news" name="sign_news" placeholder="Sign up for news">
                    <img src="pictures/arrow-right-black.svg">
                </div>
            </div>
        </div>

        <div class="our_houses">
            <h3 class="first_title">Our Houses:</h3>
            <div class="content_houses">
                <div class="house_item">
                    <img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving">
                    <div class="col_paragraph">
                        <h4 class="item_title">Harlem,</h4>
                        <span>Manhattan</span>
                    </div>
                    <span class="item_price">Private rooms from $1450</span>
                </div>
                <div class="house_item">
                    <img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving">
                    <div class="col_paragraph">
                        <h4 class="item_title">Woodbine,</h4>
                        <span>Queens</span>
                    </div>
                    <span class="item_price">Private rooms from $1500</span>
                </div>
                <div class="house_item last">
                    <img class="coliving_img" src="pictures/pages/room.jpg" alt="Coliving">
                    <div class="col_paragraph">
                        <h4 class="item_title">Greenpoint,</h4>
                        <span>Brooklin</span>
                    </div>
                    <span class="item_price">Private rooms from $1390</span>
                </div>
            </div>
        </div>
    </div>
@endsection
