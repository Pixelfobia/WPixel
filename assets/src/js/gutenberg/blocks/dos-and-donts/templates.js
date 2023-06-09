const getBlockColumn = ( optionVal, colClassName, heading ) => {
	return [
		'core/column',
		{ className: colClassName },
		[
			[
				'wpixel-blocks/heading',
				{
					className: 'wpixel-dos-and-donts__heading',
					option: optionVal,
					content: heading
				}
			],
			[
				'core/list',
				{
					className: 'wpixel-dos-and-donts__list'
				}
			]
		]
	]
}

export const blockColumns = [
	[
		'core/columns', 
		{
			className: 'wpixel-dos-and-donts__cols',
		},
		[
			getBlockColumn( 'dos', 'wpixel-dos-and-donts__col-one', 'Dos' ),
			getBlockColumn( 'donts', 'wpixel-dos-and-donts__col-two', 'Dont\'s' )
		]
	],
];