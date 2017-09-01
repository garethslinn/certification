<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Certification </title>
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/main.css">



    </head>
    <body>

    <nav role="navigation">
        <ul id="overlay-nav-menu" class="overlay-nav-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <a data-toggle-menu class="overlay-nav-menu-toggle" href="#overlay-nav-menu"><i class="fa fa-plus"></i></a>
    </nav>




    <form class="callout text-center">
        <h2>Become A Member</h2>
        <div class="floated-label-wrapper">
            <label for="full-name">Full name</label>
            <input type="text" id="full-name" name="full name input" placeholder="Full name">
        </div>
        <div class="floated-label-wrapper">
            <label for="email">Email</label>
            <input type="email" id="email" name="email input" placeholder="Email">
        </div>
        <div class="floated-label-wrapper">
            <label for="pass">Password</label>
            <input type="password" id="pass" name="password input" placeholder="Password">
        </div>
        <input class="button expanded" type="submit" value="Sign up">
    </form>

    <div class="circle-graph" data-circle-graph data-percent="90">
        <div class="circle-graph-progress">
            <div class="circle-graph-progress-fill"></div>
        </div>
        <div class="circle-graph-percents">
            <div class="circle-graph-percents-wrapper">
                <span class="circle-graph-percents-number"></span>
                <span class="circle-graph-percents-units">of 100</span>
            </div>
        </div>
    </div>


    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <h1>Welcome to Foundation</h1>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <div class="callout">
                    <h3>We&rsquo;re stoked you want to try Foundation! </h3>
                    <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
                    <p>Once you've exhausted the fun in this document, you should check out:</p>
                    <div class="grid-x grid-padding-x">
                        <div class="large-4 medium-4 cell">
                            <p><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
                        </div>
                        <div class="large-4 medium-4 cell">
                            <p><a href="http://zurb.com/university/code-skills">Foundation Code Skills</a><br />These online courses offer you a chance to better understand how Foundation works and how you can master it to create awesome projects.</p>
                        </div>
                        <div class="large-4 medium-4 cell">
                            <p><a href="http://foundation.zurb.com/forum">Foundation Forum</a><br />Join the Foundation community to ask a question or show off your knowlege.</p>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-4 medium-4 medium-push-2 cell">
                            <p><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
                        </div>
                        <div class="large-4 medium-4 medium-pull-2 cell">
                            <p><a href="https://twitter.com/ZURBfoundation">@zurbfoundation</a><br />Ping us on Twitter if you have questions. When you build something with this we'd love to see it (and send you a totally boss sticker).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="large-8 medium-8 cell">
                <h5>Here&rsquo;s your basic grid:</h5>
                <!-- Grid Example -->

                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <div class="primary callout">
                            <p><strong>This is a twelve cell section in a grid-x.</strong> Each of these includes a div.callout element so you can see where the cell are - it's not required at all for the grid.</p>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-6 medium-6 cell">
                        <div class="primary callout">
                            <p>Six cell</p>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell">
                        <div class="primary callout">
                            <p>Six cell</p>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 small-4 cell">
                        <div class="primary callout">
                            <p>Four cell</p>
                        </div>
                    </div>
                    <div class="large-4 medium-4 small-4 cell">
                        <div class="primary callout">
                            <p>Four cell</p>
                        </div>
                    </div>
                    <div class="large-4 medium-4 small-4 cell">
                        <div class="primary callout">
                            <p>Four cell</p>
                        </div>
                    </div>
                </div>

                <hr />

                <h5>We bet you&rsquo;ll need a form somewhere:</h5>
                <form>
                    <div class="grid-x grid-padding-x">
                        <div class="large-12 cell">
                            <label>Input Label</label>
                            <input type="text" placeholder="large-12.cell" />
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-4 medium-4 cell">
                            <label>Input Label</label>
                            <input type="text" placeholder="large-4.cell" />
                        </div>
                        <div class="large-4 medium-4 cell">
                            <label>Input Label</label>
                            <input type="text" placeholder="large-4.cell" />
                        </div>
                        <div class="large-4 medium-4 cell">
                            <div class="grid-x">
                                <label>Input Label</label>
                                <div class="input-group">
                                    <input type="text" placeholder="small-9.cell" class="input-group-field" />
                                    <span class="input-group-label">.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-12 cell">
                            <label>Select Box</label>
                            <select>
                                <option value="husker">Husker</option>
                                <option value="starbuck">Starbuck</option>
                                <option value="hotdog">Hot Dog</option>
                                <option value="apollo">Apollo</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-6 medium-6 cell">
                            <label>Choose Your Favorite</label>
                            <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
                            <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
                        </div>
                        <div class="large-6 medium-6 cell">
                            <label>Check these out</label>
                            <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                            <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-12 cell">
                            <label>Textarea Label</label>
                            <textarea placeholder="small-12.cell"></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <div class="large-4 medium-4 cell">
                <h5>Try one of these buttons:</h5>
                <p><a href="#" class="button">Simple Button</a><br/>
                    <a href="#" class="success button">Success Btn</a><br/>
                    <a href="#" class="alert button">Alert Btn</a><br/>
                    <a href="#" class="secondary button">Secondary Btn</a></p>
                <div class="callout">
                    <h5>So many components, girl!</h5>
                    <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
                    <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

    <script>
      $("[data-circle-graph]").each(function() {
        var $graph = $(this),
          percent = parseInt($graph.data('percent'), 10),
          deg = 360*percent/100;
        if(percent > 50) {
          $graph.addClass('gt-50');
        }
        $graph.find('.circle-graph-progress-fill').css('transform','rotate('+ deg +'deg)');
        $graph.find('.circle-graph-percents-number').html(percent+'%');
      });


      $(function () {
        var showClass = 'show';

        $('input').on('checkval', function () {
          var label = $(this).prev('label');
          if(this.value !== '') {
            label.addClass(showClass);
          } else {
            label.removeClass(showClass);
          }
        }).on('keyup', function () {
          $(this).trigger('checkval');
        });
      });

      $('[data-toggle-menu]').on("click", function(){
        $("#overlay-nav-menu").toggleClass("is-open");
      });

    </script>
    </body>
</html>
