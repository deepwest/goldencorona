<div class="top-container background-see top-distance ">
    <div class="inner-container">
        <div class="left-block-logo relative-position">
            <div class="clock short-display-hide">
                <svg>
                <defs>
                <filter id="glow">
                    <feGaussianBlur stdDeviation="2.5" result="coloredBlur" />
                    <feMerge>
                        <feMergeNode in="coloredBlur" />
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>

                <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="3" result="shadow" />
                    <feOffset dx="1" dy="1" />
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>

                </defs>
                <!-- Clock objects -->
                <circle class="clockCircle hour" cx="500" cy="240" r="150" stroke-width="6" />
                <path id="arcHour" class="clockArc hour" stroke-width="6" stroke-linecap="round" filter="url(#glow)" />
                <circle class="clockDot hour" r="8" filter="url(#glow)" />

                <circle class="clockCircle minute" cx="500" cy="240" r="170" stroke-width="3" />
                <path id="arcMinute" class="clockArc minute" stroke-width="3" stroke-linecap="round" filter="url(#glow)" />
                <circle class="clockDot minute" r="5" filter="url(#glow)" />

                <!-- Caption objects -->
                <text id="time" class="caption timeText" x="500" y="240" stroke-width="0" text-anchor="middle" alignment-baseline="middle" filter="url(#shadow)"></text>

                <text id="day" class="caption dayText" x="300" y="210" stroke-width="0" text-anchor="end" alignment-baseline="middle" filter="url(#shadow)"></text>
                <text id="date" class="caption dateText" x="300" y="250" stroke-width="0" text-anchor="end" alignment-baseline="middle" filter="url(#shadow)"></text>

                </svg> 
            </div>
        </div>
        <div class="right-block-logo">
            <img src="/img/site/corona.png" class="margin-img">
        </div>
    </div>
    <div class="inner-container">
        <div class="text-left">
            <span class="color-gold font-header slogan">Momoi & Golden Corona - качество на все времена</span>
        </div>
    </div>
</div>
<div class="top-container">
    <div class="inner-container ">

        <div class="clearfix">
            <div class="right-block home_photo">
                <section class="foto-effect">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </section>
            </div>
            <h2 class="title color-black bold-text">
                <?= $article['header'] ?>
            </h2>
            <article class="main_text color-black text-justify padding-bottom">
                <?= $article['article'] ?>
            </article>
        </div>
        <div class="">
            <hr>
            <p class="text_share">Поделитесь нами в соц сетях ...</p>
            <div class="share42init"></div>
        </div>
    </div>
</div>

<? require 'view/client/footer.php'; ?>






