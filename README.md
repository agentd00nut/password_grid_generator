echo "# password_grid_generator" >> README.md

USAGE
====

	php word_games.php [repeat]

Intro
=============
There is some white paper / youtube video out there about a guy who came up with a clever way to remember passwords.
Basically You pick four directions, "up, down, left, right" or something to that effect.

Then you need to remember three words.  The words need to be the same length and arranged in an order so that no
row or column has a letter appear more than once.

Start on the first letter in your grid that appears in the url of the website you are on.  "a" for "amazon"
"e" for "ebay" etc. or "b" if you don't have an "e" in your grid.  Then just follow your "compass" and that's your password.
You wrap when you hit the edge of the grid.  Throw in more compass directions for longer passwords and maybe alternate hitting
shift on each other letter or w/e you want.


What does this do
================
The original idea was to memorize a grid of random letters.  Who in their right mind can remember a grid of random letters?
Instead this thing generates those grids barfing them out until you see one you like and now you can use a silly thing to remember
your passwords.


Really?
======
Yea really, it's pretty stupid and you should just use a good password manager, but it's also better than repeating passwords
on every site ever.
