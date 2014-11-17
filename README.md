brokenp
=======

Simple form to check whether anything about a URL looks "broken".

The purpose is partially to fulfill this function, and partially
to illustrate one of my common PHP "patterns": a simple standalone
page that is a form that submits directly to itself.

All it does is use the PHP "curl" library to fetch the URL, following
redirects and checking certificates and doing anything else that would
be a normal part of fetching that URL.  It tells you whether that works
without a hitch or not.
