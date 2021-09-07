<?php
get_header();
?>

<div class="container">
        <header>
            <h1>Wiggle Scripts: Call for Submissions</h1>
            <a href="http://akaartistrun.com" title="Return to AKA Artist Run Centre's website.">AKA</a>
        </header>
        <main>
            <div class="call">
                <p>Please perform a <em>wiggle script</em> of your pleasing. Record your performance on a selfie cam, and <a href="#submit">submit it</a> for use in a forthcoming digital artwork by Laura McCoy, commissioned through AKA Artist-Run Centre and curated by Lucas Regazzi.</p>    
            </div>
            <div class="description">
                <h2>What is a wiggle script?</h2>
                <div class="words">
                <p>A <em>wiggle script</em> at its most basic is a short prompt to move around. Specifically, a <em>wiggle script</em> functions like a recipe for catharsis.<sup class="footnote"><a href="#footnote_1">1</a></sup> If "it's hard to dance with a devil on your back," then a <em>wiggle script</em> facilitates some dancing "/ so shake him off."<sup class="footnote"><a href="#footnote_2">2</a></sup></p>
                <p>There are four here to choose from, each with a short set of instructions and a video representation.</p>
                <p>Take a minute to let loose what you're harbouring. Expand any thinking around the 'way' a 'body' 'moves'. Any interpretation of the prompt is good. Any movement that arrives is a welcome truth.</p> 
                <p>Performing a <em>wiggle script</em> breaks the confines of the moment that possesses it; the context is thwarted by the prompt, defying procedure to make room for something messier. It's not a given that we wiggle in the kitchen, for example, but we can, and we should. There's no preferred site to perform a <em>wiggle script</em>, partially because no specific sites for it exist.</p>
                <p>The impetus to make <em>wiggle scripts</em> is necessity. There's a lot to grieve and not a lot of space to do it. Few folks are around to do it with.</p>  
                <p>If we all move a little bit—extend our toes, breathe fast or slow, two-step—to the same prompt for movement, at the same or different times, is that a message? Are we connecting?</p>
                <p>We think so.</p>
                <p>Lisa Robertson sometimes needs a flower machine.<sup class="footnote"><a href="#footnote_3">3</a></sup> Our hearts need a wiggle meme to survive a little better. Community is an agreed upon gesture.</p>
</div>
            </div>
        <article class="wiggles">
            <article class="wiggle">
                <h2 class="number">1</h2>
                <video autoplay loop controls muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/1.mp4">
                </video>
                <h2>A pose and some moves like a champion or goddess.</h2>
                <p>It’s the beginning or just an idea of beginnings, because nothing might show up after. This one is more of an invitation, something certain and a pose from the top of something high. Affirmation exists in this one, it feels like a tarot card come to life, or the hope of the tarot reading is in there.</p>
            </article>
            <article class="wiggle">
                <h2 class="number">2</h2>
                <video autoplay loop controls muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/2.mp4">
                </video>
                <h2>Like a pop in the hole, to the hole.</h2>
                <p>Two orbs float on top of each other and one gets a hard punch pop but also it is the void and also my body is the void and it’s always something to be punching in the void. Sucking the void is what I did during the pandemic. Punching is how I remember it.</p>
            </article>
            <article class="wiggle">
                <h2 class="number">3</h2>
                <video autoplay loop controls muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/3.mp4">
                </video>
                <h2>Follow the arm it knows what's best.</h2>
                <p>Two lines or arms coming together and apart. Kind of non-sexy, more of a protection to test limits. The arm is like a steel pipe and it feels that heavy too. It feels like when I broke my arm that very arm and I guess my body remembers holding it heavy for the weeks but it never really hurt that much just heavy and awkward.</p>
            </article>
            <article class="wiggle">
                <h2 class="number">4</h2>
                <video autoplay loop controls muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/4.mp4">
                </video>
                <h2>Acknowledge the sky.</h2>
                <p>Something about barely moving and not moving is hard, for me, like I would rather do a quick girate than hold a pose or barely hold a pose, it feels harder in this to not do much and take up my size as it were. This one is vulnerable and open and asks for things it doesn’t know it can handle. It acknowledges the sky and ways to leave and life after this and the idea that it is in the sky.</p>
            </article>
        </article>
        <aside class="footnotes">
            <p><span class="footnote" id="footnote_1">1</span>Maryanne Casasanta wrote something really beautiful on Instagram recently. The post's caption described faithfully cooking one of her late mother's recipes as a way of connecting to her. I think it resonates with what Laura and I are after when we imagine that <em>wiggle scripts</em> are recipes for catharsis. Part of the post's caption reads, "I told my sweet friend Naomi about how all the food work is about grief and comfort, and she astutely replied that it's not unlike dance. 'By following her recipes, your body likely finds her gestures and moves to make it too.'"</p>
            <p><span class="footnote" id="footnote_2">2</span>Florence and the Machine, "Shake it Out," track 2 on <em>Ceremonials</em>, Island Records, 2011.</p>
            <p><span class="footnote" id="footnote_3">3</span>Lisa Robertson, <em>3 Summers</em> (Toronto: Coach House Books, 2016).</p>
        </aside>
        </main>
    </div>
    <footer id="submit">
        <div class="container">
            <?php query_posts('post_type=submissions_form'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </footer>