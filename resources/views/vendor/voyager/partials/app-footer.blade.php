<footer class="app-footer">
    <div class="site-footer-right">
        @if (rand(1,100) == 100)
            <i class="voyager-rum-1"></i> {{ __('voyager::theme.footer_copyright2') }}
        @else
            {!! __('voyager::theme.footer_copyright') !!} <a href="https://web.facebook.com/Digital-Roah-249398658997528/" target="_blank">Digital Roah</a>
        @endif

    </div>
</footer>
