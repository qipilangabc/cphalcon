<?php
// These are priority files, their contents must be put into phalcon.c before any other source files

return array(
    // Header files
    'assets/filters/nojsminifier.h',
    'assets/filters/nocssminifier.h',
    'mvc/model/query/parser.h',
    'mvc/model/query/scanner.h',
    'mvc/model/query/phql.h',
    'mvc/view/engine/volt/parser.h',
    'mvc/view/engine/volt/scanner.h',
    'mvc/view/engine/volt/volt.h',
    'annotations/parser.h',
    'annotations/scanner.h',
    'annotations/annot.h',
    'kernel/main.h',
    'kernel/memory.h',
    'kernel/backtrace.h',
    'kernel/fcall.h',
    'kernel/array.h',
    'kernel/hash.h',
    'kernel/object.h',
    'kernel/string.h',
    'kernel/mbstring.h',
    'kernel/filter.h',
    'kernel/file.h',
    'kernel/output.h',
    'kernel/operators.h',
    'kernel/concat.h',
    'kernel/exception.h',
    'kernel/require.h',
    'kernel/variables.h',
    'kernel/session.h',
    'kernel/reflection.h',
    'kernel/framework/orm.h',
    'kernel/framework/router.h',
    'kernel/framework/url.h',
    'interned-strings.h',
    // Source files
    'kernel/main.c',
    'kernel/memory.c',
    'kernel/backtrace.c',
    'kernel/fcall.c',
    'kernel/array.c',
    'kernel/hash.c',
    'kernel/object.c',
    'kernel/string.c',
    'kernel/mbstring.c',
    'kernel/filter.c',
    'kernel/operators.c',
    'kernel/concat.c',
    'kernel/file.c',
    'kernel/output.c',
    'kernel/exception.c',
    'kernel/require.c',
    'kernel/variables.c',
    'kernel/session.c',
    'kernel/framework/orm.c',
    'kernel/framework/router.c',
    'kernel/framework/url.c',
    'interned-strings.c',
);
