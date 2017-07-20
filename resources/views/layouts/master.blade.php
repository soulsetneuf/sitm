@if (Auth::check())
    <!DOCTYPE html>
    <html>
    @include("layouts.head")
    @include("layouts.body")
    </html>
@else
    @include("layouts.app")
    @include("auth.content")
@endif