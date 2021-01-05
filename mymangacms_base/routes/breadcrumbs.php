<?php

Breadcrumbs::register(
        'admin.index', function ($breadcrumbs) {
    $breadcrumbs->push(
            Lang::get('messages.admin.layout.dashboard'), route('admin.index')
    );
});

Breadcrumbs::register(
        'admin.manga.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(
            Lang::get('messages.admin.layout.manage-manga'), route('admin.manga.index')
    );
});

Breadcrumbs::register(
        'admin.manga.show', function ($breadcrumbs, $manga) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push($manga->name, route('admin.manga.show', $manga->id));
});

Breadcrumbs::register(
        'admin.manga.edit', function ($breadcrumbs, $manga) {
    $breadcrumbs->parent('admin.manga.show', $manga);
    $breadcrumbs->push(
            Lang::get('messages.admin.manga.edit'), route('admin.manga.edit', $manga->id)
    );
});

Breadcrumbs::register(
        'admin.manga.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(
            Lang::get('messages.admin.manga.create'), route('admin.manga.create')
    );
});

Breadcrumbs::register(
        'admin.manga.chapter.create', function ($breadcrumbs, $manga) {
    $breadcrumbs->parent('admin.manga.show', $manga);
    $breadcrumbs->push(
            Lang::get('messages.admin.chapter.create'), route('admin.manga.chapter.create', $manga->id)
    );
});

Breadcrumbs::register(
        'admin.manga.chapter.show', function ($breadcrumbs, $manga, $chapter) {
    $breadcrumbs->parent('admin.manga.show', $manga);
    $breadcrumbs->push(
            Lang::get('messages.admin.chapter.edit', array('number' => $chapter->number)), route(
                    'admin.manga.chapter.show', array($manga->id, $chapter->id)
            )
    );
});

Breadcrumbs::register(
        'admin.manga.chapter.page.create', function ($breadcrumbs, $manga, $chapter) {
    $breadcrumbs->parent('admin.manga.chapter.show', $manga, $chapter);
    $breadcrumbs->push(
            Lang::get('messages.admin.chapter.edit.add-pages'), route('admin.manga.chapter.page.create', array($manga->id, $chapter->id))
    );
});

Breadcrumbs::register(
        'admin.manga.hot', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.layout.hotmanga'));
});

Breadcrumbs::register(
        'admin.category.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.layout.categories'));
});

Breadcrumbs::register(
        'admin.category.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.layout.categories'));
});

Breadcrumbs::register(
        'admin.comictype.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.layout.comic-types'));
});

Breadcrumbs::register(
        'admin.comictype.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.layout.comic-types'));
});

Breadcrumbs::register(
        'admin.tag.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.manga.tags'));
});

Breadcrumbs::register(
        'admin.tag.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.manga.tags'));
});

Breadcrumbs::register(
        'admin.author.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.manga.author_artist'));
});

Breadcrumbs::register(
        'admin.author.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manga.index');
    $breadcrumbs->push(Lang::get('messages.admin.manga.author_artist'));
});

Breadcrumbs::register(
        'admin.manga.options', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.layout.options'));
});

Breadcrumbs::register(
        'admin.settings.general', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.general'));
});

Breadcrumbs::register(
        'admin.settings.seo', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.seo'));
});

Breadcrumbs::register(
        'admin.settings.profile', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.profile'));
});

Breadcrumbs::register(
        'admin.settings.subscription', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push('Subscription');
});

Breadcrumbs::register(
        'admin.settings.theme', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.theme'));
});

Breadcrumbs::register(
        'admin.settings.ads', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.ads.manage-ads'));
});

Breadcrumbs::register(
        'admin.settings.widgets', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.widgets'));
});

Breadcrumbs::register(
        'admin.settings.cache', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.cache'));
});

Breadcrumbs::register(
        'admin.settings.gdrive', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.gdrive'));
});

Breadcrumbs::register(
        'admin.user.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.users.users'), route('admin.user.index'));
});

Breadcrumbs::register(
        'admin.user.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.user.index');
    $breadcrumbs->push(Lang::get('messages.admin.users.create'));
});

Breadcrumbs::register(
        'admin.user.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.user.index');
    $breadcrumbs->push(Lang::get('messages.admin.users.edit-user'));
});

Breadcrumbs::register(
        'admin.role.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.users.roles'), route('admin.role.index'));
});

Breadcrumbs::register(
        'admin.role.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.role.index');
    $breadcrumbs->push(Lang::get('messages.admin.users.roles.create'));
});

Breadcrumbs::register(
        'admin.role.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.role.index');
    $breadcrumbs->push(Lang::get('messages.admin.users.roles.edit'));
});

Breadcrumbs::register(
        'admin.users.permissions', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.users.permissions'));
});

Breadcrumbs::register(
        'admin.posts.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push('Manage posts', route('admin.posts.index'));
});

Breadcrumbs::register(
        'admin.posts.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.posts.index');
    $breadcrumbs->push('Create Post');
});

Breadcrumbs::register(
        'admin.posts.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.posts.index');
    $breadcrumbs->push('Edit Post');
});

Breadcrumbs::register(
        'admin.pages.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('blog::messages.admin.pages.pages'), route('admin.pages.index'));
});

Breadcrumbs::register(
        'admin.pages.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.pages.index');
    $breadcrumbs->push(Lang::get('blog::messages.admin.pages.create'));
});

Breadcrumbs::register(
        'admin.pages.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.pages.index');
    $breadcrumbs->push(Lang::get('blog::messages.admin.pages.edit'));
});

Breadcrumbs::register(
        'admin.settings.menu.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(Lang::get('messages.admin.settings'));
    $breadcrumbs->push(Lang::get('messages.admin.settings.menu'));
});

Breadcrumbs::register(
        'admin.modules.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.index');
    $breadcrumbs->push(
            Lang::get('base::messages.admin.modules'), route('admin.modules.index')
    );
});

Breadcrumbs::register(
        'admin.modules.show', function ($breadcrumbs, $module) {
    $breadcrumbs->parent('admin.modules.index');
    $breadcrumbs->push($module);
});
