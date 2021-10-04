<nav aria-label="breadcrumb">
    <ol class="breadcrumb py-1 rounded-0 border-top border-light border-bottom">

        <li class="breadcrumb-item">
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
        </li>
        <?php $link = "" ?>
        @for($i = 1; $i <= count(Request::segments()); $i++)
            @if($i < count(Request::segments()) & $i > 0)
                <?php $link .= "/" . Request::segment($i); ?>
                <li class="breadcrumb-item">
                    <a href="<?= $link ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
                </li>
            @else
                <li class="breadcrumb-item">
                    {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                </li>
            @endif
        @endfor
    </ol>
</nav>
