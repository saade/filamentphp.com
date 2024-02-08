@storybook([
    'name' => 'Badge',
    'args' => [
        'label' => 'Filament',
        'size' => 'md',
        'color' => 'primary',
        'icon' => 'heroicon-o-at-symbol',
        'iconPosition' => 'before',
    ],
    'argTypes' => [
        'size' => [
            'options' => ['xs', 'md', 'sm'],
            'control' => [
                'type' => 'radio',
            ],
        ],
        'color' => [
            'options' => ['primary', 'success', 'danger', 'warning', 'info'],
            'control' => [
                'type' => 'select',
            ],
        ],
        'icon' => [
            'options' => [
                'heroicon-o-at-symbol',
                'heroicon-o-check-circle',
                'heroicon-o-exclamation-circle',
                'heroicon-o-information-circle',
                'heroicon-o-x-circle',
            ],
            'control' => [
                'type' => 'select',
            ],
        ],
        'iconPosition' => [
            'options' => ['before', 'after'],
            'control' => [
                'type' => 'radio',
            ],
        ],
    ],
])

<x-filament::badge
    :$size
    :$icon
    :$iconPosition
>
    {{ $label }}
</x-filament::badge>
