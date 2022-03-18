const defaultConfig = require('@wordpress/scripts/config/webpack.config');
module.exports = [
	{
		...defaultConfig,
		entry:
			__dirname +
			'/src/js/script.js',
		output: {
			path:
				__dirname + '/build/js/',
			filename: 'script.min.js',
		},
		module: {
			...defaultConfig.module,
			rules: [
				...defaultConfig.module.rules,
				{
					test: /\.js$/,
					exclude: /(node_modules)/,
					use: {
						loader: 'babel-loader',
						options: {
						},
					},
				},
			],
		},
	},
];