Giving a look at the source code with developer tools you notice a function that calls `key.php`, probabily our objective, but accessing it directly we get an error.
Do we have to pass it some parameters? From the code it doesn't look like that.
Another solution is to call the function, but it is necessary to break the md5, quite difficult if the password is not elementary.
The easiest solution is to call the function from the browser console (in the developer tools).
Indeed typing getThat('Y'); in the console you get the flag `slntCTF{the_console_is_useful}`.
