@storybook([
    'name' => 'Avatar',
    'args' => [
        'src' => 'https://avatars.githubusercontent.com/u/64450473?s=200&v=4',
        'alt' => 'FilamentPHP',
        'circular' => true,
        'size' => 'sm',
    ],
    'argTypes' => [
        'size' => [
            'options' => ['sm', 'md', 'lg'],
            'control' => [
                'type' => 'radio',
            ],
        ],
    ],
])

<x-filament::avatar
    :src="$src"
    :alt="$alt"
    :circular="$circular"
    :size="$size"
/>
