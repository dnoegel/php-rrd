# PHP RRD: PHP Round robin database
PHP RRD is a **work in progress** implementation of a round robin database in PHP. It is intended to be

* independent of the actual database backend
* useful for monitoring data of any kind
* might provide some graphing at some point

Currently its non of this.

# Why?
Actually this is just a fun project, that tries to understand and re-implement some of the core functions of [rrdtool](http://oss.oetiker.ch/rrdtool/).
Rrdtool is an awesome and powerful program with a long development history, fancy graphics, holt-winters smoothing, custom consolidation
calculation, high performance and many more. Its also supported by a wide range of tools (e.g munin) and has binding to
many programming languages ([even PHP](http://php.net/manual/de/book.rrd.php), even though its not a userland binding).

# Status
Nothing, work in progress, no actual logic, just some interfaces