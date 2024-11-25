<li>
    <a {{$attributes->merge(['href'=>'#'])->class('hover:text-highlight-yellow transition-colors')}}>
        {{$slot}}
    </a>
</li>