<?php
// @link https://confluence.jetbrains.com/display/PhpStorm/PhpStorm+Advanced+Metadata
namespace PHPSTORM_META {

	expectedArguments(
		\Cake\Cache\Cache::add(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::clear(),
		0,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::clearGroup(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::decrement(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::delete(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::deleteMany(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::increment(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::read(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::readMany(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::remember(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::write(),
		2,
		argumentsSet('cacheEngines')
	);

	exitPoint(\Cake\Console\ConsoleIo::abort());

	override(
		\Cake\Controller\Controller::loadComponent(0),
		map([
			'Auth' => \Cake\Controller\Component\AuthComponent::class,
			'Flash' => \Cake\Controller\Component\FlashComponent::class,
			'FormProtection' => \Cake\Controller\Component\FormProtectionComponent::class,
			'Paginator' => \Cake\Controller\Component\PaginatorComponent::class,
			'RequestHandler' => \Cake\Controller\Component\RequestHandlerComponent::class,
			'Security' => \Cake\Controller\Component\SecurityComponent::class,
			'Tools.Common' => \Tools\Controller\Component\CommonComponent::class,
			'Tools.Mobile' => \Tools\Controller\Component\MobileComponent::class,
			'Tools.RefererRedirect' => \Tools\Controller\Component\RefererRedirectComponent::class,
			'Tools.Url' => \Tools\Controller\Component\UrlComponent::class,
		])
	);

	override(
		\Cake\Core\PluginApplicationInterface::addPlugin(0),
		map([
			'Bake' => \Cake\Http\BaseApplication::class,
			'Cake/TwigView' => \Cake\Http\BaseApplication::class,
			'CakeDto' => \Cake\Http\BaseApplication::class,
			'DebugKit' => \Cake\Http\BaseApplication::class,
			'IdeHelper' => \Cake\Http\BaseApplication::class,
			'Migrations' => \Cake\Http\BaseApplication::class,
			'Queue' => \Cake\Http\BaseApplication::class,
			'Shim' => \Cake\Http\BaseApplication::class,
			'StateMachine' => \Cake\Http\BaseApplication::class,
			'Tools' => \Cake\Http\BaseApplication::class,
		])
	);

	override(
		\Cake\Database\TypeFactory::build(0),
		map([
			'biginteger' => \Cake\Database\Type\IntegerType::class,
			'binary' => \Cake\Database\Type\BinaryType::class,
			'binaryuuid' => \Cake\Database\Type\BinaryUuidType::class,
			'boolean' => \Cake\Database\Type\BoolType::class,
			'char' => \Cake\Database\Type\StringType::class,
			'date' => \Cake\Database\Type\DateType::class,
			'datetime' => \Cake\Database\Type\DateTimeType::class,
			'datetimefractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'decimal' => \Cake\Database\Type\DecimalType::class,
			'float' => \Cake\Database\Type\FloatType::class,
			'integer' => \Cake\Database\Type\IntegerType::class,
			'json' => \Cake\Database\Type\JsonType::class,
			'smallinteger' => \Cake\Database\Type\IntegerType::class,
			'string' => \Cake\Database\Type\StringType::class,
			'text' => \Cake\Database\Type\StringType::class,
			'time' => \Cake\Database\Type\TimeType::class,
			'timestamp' => \Cake\Database\Type\DateTimeType::class,
			'timestampfractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'timestamptimezone' => \Cake\Database\Type\DateTimeTimezoneType::class,
			'tinyinteger' => \Cake\Database\Type\IntegerType::class,
			'uuid' => \Cake\Database\Type\UuidType::class,
		])
	);

	expectedArguments(
		\Cake\Database\TypeFactory::map(),
		0,
		'biginteger',
		'binary',
		'binaryuuid',
		'boolean',
		'char',
		'date',
		'datetime',
		'datetimefractional',
		'decimal',
		'float',
		'integer',
		'json',
		'smallinteger',
		'string',
		'text',
		'time',
		'timestamp',
		'timestampfractional',
		'timestamptimezone',
		'tinyinteger',
		'uuid'
	);

	expectedArguments(
		\Cake\Datasource\ConnectionManager::get(),
		0,
		'default',
		'test'
	);

	override(
		\Cake\Datasource\ModelAwareTrait::loadModel(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Files' => \App\Model\Table\FilesTable::class,
			'Groups' => \App\Model\Table\GroupsTable::class,
			'GroupsUsers' => \App\Model\Table\GroupsUsersTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'StateMachine.StateMachineItemStateLogs' => \StateMachine\Model\Table\StateMachineItemStateLogsTable::class,
			'StateMachine.StateMachineItemStates' => \StateMachine\Model\Table\StateMachineItemStatesTable::class,
			'StateMachine.StateMachineItems' => \StateMachine\Model\Table\StateMachineItemsTable::class,
			'StateMachine.StateMachineLocks' => \StateMachine\Model\Table\StateMachineLocksTable::class,
			'StateMachine.StateMachineProcesses' => \StateMachine\Model\Table\StateMachineProcessesTable::class,
			'StateMachine.StateMachineTimeouts' => \StateMachine\Model\Table\StateMachineTimeoutsTable::class,
			'StateMachine.StateMachineTransitionLogs' => \StateMachine\Model\Table\StateMachineTransitionLogsTable::class,
			'Tagged' => \App\Model\Table\TaggedTable::class,
			'Tags' => \App\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	override(
		\Cake\Datasource\QueryInterface::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'queued' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	expectedArguments(
		\Cake\Http\ServerRequest::getParam(),
		0,
		'_ext',
		'_matchedRoute',
		'action',
		'controller',
		'pass',
		'plugin',
		'prefix'
	);

	override(
		\Cake\ORM\Association::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'queued' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Locator\LocatorInterface::get(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Files' => \App\Model\Table\FilesTable::class,
			'Groups' => \App\Model\Table\GroupsTable::class,
			'GroupsUsers' => \App\Model\Table\GroupsUsersTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'StateMachine.StateMachineItemStateLogs' => \StateMachine\Model\Table\StateMachineItemStateLogsTable::class,
			'StateMachine.StateMachineItemStates' => \StateMachine\Model\Table\StateMachineItemStatesTable::class,
			'StateMachine.StateMachineItems' => \StateMachine\Model\Table\StateMachineItemsTable::class,
			'StateMachine.StateMachineLocks' => \StateMachine\Model\Table\StateMachineLocksTable::class,
			'StateMachine.StateMachineProcesses' => \StateMachine\Model\Table\StateMachineProcessesTable::class,
			'StateMachine.StateMachineTimeouts' => \StateMachine\Model\Table\StateMachineTimeoutsTable::class,
			'StateMachine.StateMachineTransitionLogs' => \StateMachine\Model\Table\StateMachineTransitionLogsTable::class,
			'Tagged' => \App\Model\Table\TaggedTable::class,
			'Tags' => \App\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	expectedArguments(
		\Cake\ORM\Table::addBehavior(),
		0,
		'CounterCache',
		'DebugKit.Timed',
		'Timestamp',
		'Tools.AfterSave',
		'Tools.Bitmasked',
		'Tools.Confirmable',
		'Tools.Jsonable',
		'Tools.Neighbor',
		'Tools.Passwordable',
		'Tools.Reset',
		'Tools.Slugged',
		'Tools.String',
		'Tools.Toggle',
		'Tools.TypeMap',
		'Tools.Typographic',
		'Translate',
		'Tree'
	);

	override(
		\Cake\ORM\Table::belongToMany(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsToMany::class,
			'Files' => \Cake\ORM\Association\BelongsToMany::class,
			'Groups' => \Cake\ORM\Association\BelongsToMany::class,
			'GroupsUsers' => \Cake\ORM\Association\BelongsToMany::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\BelongsToMany::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\BelongsToMany::class,
			'StateMachine.StateMachineItemStateLogs' => \Cake\ORM\Association\BelongsToMany::class,
			'StateMachine.StateMachineItemStates' => \Cake\ORM\Association\BelongsToMany::class,
			'StateMachine.StateMachineItems' => \Cake\ORM\Association\BelongsToMany::class,
			'StateMachine.StateMachineLocks' => \Cake\ORM\Association\BelongsToMany::class,
			'StateMachine.StateMachineProcesses' => \Cake\ORM\Association\BelongsToMany::class,
			'StateMachine.StateMachineTimeouts' => \Cake\ORM\Association\BelongsToMany::class,
			'StateMachine.StateMachineTransitionLogs' => \Cake\ORM\Association\BelongsToMany::class,
			'Tagged' => \Cake\ORM\Association\BelongsToMany::class,
			'Tags' => \Cake\ORM\Association\BelongsToMany::class,
			'Tools.Tokens' => \Cake\ORM\Association\BelongsToMany::class,
			'Users' => \Cake\ORM\Association\BelongsToMany::class,
		])
	);

	override(
		\Cake\ORM\Table::belongsTo(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsTo::class,
			'Files' => \Cake\ORM\Association\BelongsTo::class,
			'Groups' => \Cake\ORM\Association\BelongsTo::class,
			'GroupsUsers' => \Cake\ORM\Association\BelongsTo::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\BelongsTo::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\BelongsTo::class,
			'StateMachine.StateMachineItemStateLogs' => \Cake\ORM\Association\BelongsTo::class,
			'StateMachine.StateMachineItemStates' => \Cake\ORM\Association\BelongsTo::class,
			'StateMachine.StateMachineItems' => \Cake\ORM\Association\BelongsTo::class,
			'StateMachine.StateMachineLocks' => \Cake\ORM\Association\BelongsTo::class,
			'StateMachine.StateMachineProcesses' => \Cake\ORM\Association\BelongsTo::class,
			'StateMachine.StateMachineTimeouts' => \Cake\ORM\Association\BelongsTo::class,
			'StateMachine.StateMachineTransitionLogs' => \Cake\ORM\Association\BelongsTo::class,
			'Tagged' => \Cake\ORM\Association\BelongsTo::class,
			'Tags' => \Cake\ORM\Association\BelongsTo::class,
			'Tools.Tokens' => \Cake\ORM\Association\BelongsTo::class,
			'Users' => \Cake\ORM\Association\BelongsTo::class,
		])
	);

	override(
		\Cake\ORM\Table::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'queued' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Table::hasMany(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasMany::class,
			'Files' => \Cake\ORM\Association\HasMany::class,
			'Groups' => \Cake\ORM\Association\HasMany::class,
			'GroupsUsers' => \Cake\ORM\Association\HasMany::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\HasMany::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\HasMany::class,
			'StateMachine.StateMachineItemStateLogs' => \Cake\ORM\Association\HasMany::class,
			'StateMachine.StateMachineItemStates' => \Cake\ORM\Association\HasMany::class,
			'StateMachine.StateMachineItems' => \Cake\ORM\Association\HasMany::class,
			'StateMachine.StateMachineLocks' => \Cake\ORM\Association\HasMany::class,
			'StateMachine.StateMachineProcesses' => \Cake\ORM\Association\HasMany::class,
			'StateMachine.StateMachineTimeouts' => \Cake\ORM\Association\HasMany::class,
			'StateMachine.StateMachineTransitionLogs' => \Cake\ORM\Association\HasMany::class,
			'Tagged' => \Cake\ORM\Association\HasMany::class,
			'Tags' => \Cake\ORM\Association\HasMany::class,
			'Tools.Tokens' => \Cake\ORM\Association\HasMany::class,
			'Users' => \Cake\ORM\Association\HasMany::class,
		])
	);

	override(
		\Cake\ORM\Table::hasOne(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasOne::class,
			'Files' => \Cake\ORM\Association\HasOne::class,
			'Groups' => \Cake\ORM\Association\HasOne::class,
			'GroupsUsers' => \Cake\ORM\Association\HasOne::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\HasOne::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\HasOne::class,
			'StateMachine.StateMachineItemStateLogs' => \Cake\ORM\Association\HasOne::class,
			'StateMachine.StateMachineItemStates' => \Cake\ORM\Association\HasOne::class,
			'StateMachine.StateMachineItems' => \Cake\ORM\Association\HasOne::class,
			'StateMachine.StateMachineLocks' => \Cake\ORM\Association\HasOne::class,
			'StateMachine.StateMachineProcesses' => \Cake\ORM\Association\HasOne::class,
			'StateMachine.StateMachineTimeouts' => \Cake\ORM\Association\HasOne::class,
			'StateMachine.StateMachineTransitionLogs' => \Cake\ORM\Association\HasOne::class,
			'Tagged' => \Cake\ORM\Association\HasOne::class,
			'Tags' => \Cake\ORM\Association\HasOne::class,
			'Tools.Tokens' => \Cake\ORM\Association\HasOne::class,
			'Users' => \Cake\ORM\Association\HasOne::class,
		])
	);

	expectedArguments(
		\Cake\ORM\Table::removeBehavior(),
		0,
		'AfterSave',
		'Bitmasked',
		'Confirmable',
		'CounterCache',
		'Jsonable',
		'Neighbor',
		'Passwordable',
		'Reset',
		'Slugged',
		'String',
		'Timed',
		'Timestamp',
		'Toggle',
		'Translate',
		'Tree',
		'TypeMap',
		'Typographic'
	);

	override(
		\Cake\ORM\TableRegistry::get(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Files' => \App\Model\Table\FilesTable::class,
			'Groups' => \App\Model\Table\GroupsTable::class,
			'GroupsUsers' => \App\Model\Table\GroupsUsersTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'StateMachine.StateMachineItemStateLogs' => \StateMachine\Model\Table\StateMachineItemStateLogsTable::class,
			'StateMachine.StateMachineItemStates' => \StateMachine\Model\Table\StateMachineItemStatesTable::class,
			'StateMachine.StateMachineItems' => \StateMachine\Model\Table\StateMachineItemsTable::class,
			'StateMachine.StateMachineLocks' => \StateMachine\Model\Table\StateMachineLocksTable::class,
			'StateMachine.StateMachineProcesses' => \StateMachine\Model\Table\StateMachineProcessesTable::class,
			'StateMachine.StateMachineTimeouts' => \StateMachine\Model\Table\StateMachineTimeoutsTable::class,
			'StateMachine.StateMachineTransitionLogs' => \StateMachine\Model\Table\StateMachineTransitionLogsTable::class,
			'Tagged' => \App\Model\Table\TaggedTable::class,
			'Tags' => \App\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	expectedArguments(
		\Cake\Routing\Router::pathUrl(),
		0,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\TestSuite\TestCase::addFixture(),
		0,
		'app.Files',
		'app.Groups',
		'app.GroupsUsers',
		'app.Tagged',
		'app.Tags',
		'app.Users',
		'core.Articles',
		'core.ArticlesMoreTranslations',
		'core.ArticlesTags',
		'core.ArticlesTranslations',
		'core.Attachments',
		'core.AuthUsers',
		'core.Authors',
		'core.AuthorsTags',
		'core.AuthorsTranslations',
		'core.BinaryUuiditems',
		'core.CakeSessions',
		'core.Categories',
		'core.Comments',
		'core.CommentsTranslations',
		'core.CompositeIncrements',
		'core.CounterCacheCategories',
		'core.CounterCacheComments',
		'core.CounterCachePosts',
		'core.CounterCacheUserCategoryPosts',
		'core.CounterCacheUsers',
		'core.Datatypes',
		'core.DateKeys',
		'core.FeaturedTags',
		'core.Members',
		'core.MenuLinkTrees',
		'core.NumberTrees',
		'core.OrderedUuidItems',
		'core.Orders',
		'core.OtherArticles',
		'core.PolymorphicTagged',
		'core.Posts',
		'core.Products',
		'core.Profiles',
		'core.Sections',
		'core.SectionsMembers',
		'core.SectionsTranslations',
		'core.Sessions',
		'core.SiteArticles',
		'core.SiteArticlesTags',
		'core.SiteAuthors',
		'core.SiteTags',
		'core.SpecialTags',
		'core.SpecialTagsTranslations',
		'core.Tags',
		'core.TagsShadowTranslations',
		'core.TagsTranslations',
		'core.TestPluginComments',
		'core.Things',
		'core.Translates',
		'core.Users',
		'core.Uuiditems',
		'core.Uuidportfolios',
		'plugin.Bake.BakeArticles',
		'plugin.Bake.BakeArticlesBakeTags',
		'plugin.Bake.BakeCar',
		'plugin.Bake.BakeComments',
		'plugin.Bake.BakeTags',
		'plugin.Bake.BakeTemplateAuthors',
		'plugin.Bake.BakeTemplateProfiles',
		'plugin.Bake.BakeTemplateRoles',
		'plugin.Bake.BinaryTests',
		'plugin.Bake.Categories',
		'plugin.Bake.CategoriesProducts',
		'plugin.Bake.CategoryThreads',
		'plugin.Bake.Datatypes',
		'plugin.Bake.Invitations',
		'plugin.Bake.NumberTrees',
		'plugin.Bake.OldProducts',
		'plugin.Bake.ProductVersions',
		'plugin.Bake.Products',
		'plugin.Bake.TodoItems',
		'plugin.Bake.TodoItemsTodoLabels',
		'plugin.Bake.TodoLabels',
		'plugin.Bake.TodoTasks',
		'plugin.Bake.Users',
		'plugin.DebugKit.Panels',
		'plugin.DebugKit.Requests',
		'plugin.IdeHelper.BarBars',
		'plugin.IdeHelper.Cars',
		'plugin.IdeHelper.Foo',
		'plugin.IdeHelper.Houses',
		'plugin.IdeHelper.Wheels',
		'plugin.IdeHelper.Windows',
		'plugin.Queue.QueueProcesses',
		'plugin.Queue.QueuedJobs',
		'plugin.StateMachine.StateMachineItemStateLogs',
		'plugin.StateMachine.StateMachineItemStates',
		'plugin.StateMachine.StateMachineItems',
		'plugin.StateMachine.StateMachineLocks',
		'plugin.StateMachine.StateMachineProcesses',
		'plugin.StateMachine.StateMachineTimeouts',
		'plugin.StateMachine.StateMachineTransitionLogs',
		'plugin.Tools.AfterTrees',
		'plugin.Tools.BitmaskedComments',
		'plugin.Tools.Data',
		'plugin.Tools.JsonableComments',
		'plugin.Tools.MultiColumnUsers',
		'plugin.Tools.ResetComments',
		'plugin.Tools.Roles',
		'plugin.Tools.SluggedArticles',
		'plugin.Tools.Stories',
		'plugin.Tools.StringComments',
		'plugin.Tools.ToggleAddresses',
		'plugin.Tools.Tokens',
		'plugin.Tools.ToolsUsers'
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyArray(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyDate(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyDateTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyFile(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyFor(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyString(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyArray(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyDate(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyDateTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyFile(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyString(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::requirePresence(),
		1,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\View\Helper\FormHelper::control(),
		0,
		'active',
		'command',
		'completed',
		'condition',
		'created',
		'data',
		'description',
		'email',
		'error_message',
		'event',
		'expires',
		'failed',
		'failure_message',
		'fetched',
		'first_name',
		'foreign_key',
		'group_id',
		'id',
		'identifier',
		'is_error',
		'job_group',
		'job_type',
		'last_name',
		'locked',
		'modified',
		'name',
		'notbefore',
		'occurrence',
		'params',
		'password',
		'path',
		'pid',
		'priority',
		'process',
		'progress',
		'reference',
		'role',
		'server',
		'source_state',
		'state',
		'state_machine',
		'state_machine_item_id',
		'state_machine_item_state_id',
		'state_machine_process_id',
		'state_machine_transition_log_id',
		'status',
		'table_alias',
		'tag_id',
		'target_state',
		'terminate',
		'timeout',
		'type',
		'user_id',
		'workerkey'
	);

	expectedArguments(
		\Cake\View\Helper\HtmlHelper::linkFromPath(),
		1,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\View\Helper\UrlHelper::buildFromPath(),
		0,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\View\View::element(),
		0,
		'Cake/TwigView.twig_panel',
		'DebugKit.cache_panel',
		'DebugKit.deprecations_panel',
		'DebugKit.environment_panel',
		'DebugKit.history_panel',
		'DebugKit.include_panel',
		'DebugKit.log_panel',
		'DebugKit.mail_panel',
		'DebugKit.packages_panel',
		'DebugKit.preview_header',
		'DebugKit.request_panel',
		'DebugKit.routes_panel',
		'DebugKit.session_panel',
		'DebugKit.sql_log_panel',
		'DebugKit.timer_panel',
		'DebugKit.variables_panel',
		'Queue.search',
		'Tools.pagination',
		'flash/default',
		'flash/error',
		'flash/success'
	);

	override(
		\Cake\View\View::loadHelper(0),
		map([
			'Bake.Bake' => \Bake\View\Helper\BakeHelper::class,
			'Bake.DocBlock' => \Bake\View\Helper\DocBlockHelper::class,
			'Breadcrumbs' => \Cake\View\Helper\BreadcrumbsHelper::class,
			'DebugKit.Credentials' => \DebugKit\View\Helper\CredentialsHelper::class,
			'DebugKit.SimpleGraph' => \DebugKit\View\Helper\SimpleGraphHelper::class,
			'DebugKit.Toolbar' => \DebugKit\View\Helper\ToolbarHelper::class,
			'Flash' => \Cake\View\Helper\FlashHelper::class,
			'Form' => \Cake\View\Helper\FormHelper::class,
			'Html' => \Cake\View\Helper\HtmlHelper::class,
			'IdeHelper.DocBlock' => \IdeHelper\View\Helper\DocBlockHelper::class,
			'Migrations.Migration' => \Migrations\View\Helper\MigrationHelper::class,
			'Number' => \Cake\View\Helper\NumberHelper::class,
			'Paginator' => \Cake\View\Helper\PaginatorHelper::class,
			'Queue.Queue' => \Queue\View\Helper\QueueHelper::class,
			'Queue.QueueProgress' => \Queue\View\Helper\QueueProgressHelper::class,
			'StateMachine.StateMachine' => \StateMachine\View\Helper\StateMachineHelper::class,
			'Text' => \Cake\View\Helper\TextHelper::class,
			'Time' => \Cake\View\Helper\TimeHelper::class,
			'Tools.Common' => \Tools\View\Helper\CommonHelper::class,
			'Tools.Form' => \Tools\View\Helper\FormHelper::class,
			'Tools.Format' => \Tools\View\Helper\FormatHelper::class,
			'Tools.Gravatar' => \Tools\View\Helper\GravatarHelper::class,
			'Tools.Html' => \Tools\View\Helper\HtmlHelper::class,
			'Tools.Meter' => \Tools\View\Helper\MeterHelper::class,
			'Tools.Number' => \Tools\View\Helper\NumberHelper::class,
			'Tools.Obfuscate' => \Tools\View\Helper\ObfuscateHelper::class,
			'Tools.Progress' => \Tools\View\Helper\ProgressHelper::class,
			'Tools.QrCode' => \Tools\View\Helper\QrCodeHelper::class,
			'Tools.Text' => \Tools\View\Helper\TextHelper::class,
			'Tools.Time' => \Tools\View\Helper\TimeHelper::class,
			'Tools.Timeline' => \Tools\View\Helper\TimelineHelper::class,
			'Tools.Tree' => \Tools\View\Helper\TreeHelper::class,
			'Tools.Typography' => \Tools\View\Helper\TypographyHelper::class,
			'Tools.Url' => \Tools\View\Helper\UrlHelper::class,
			'Url' => \Cake\View\Helper\UrlHelper::class,
		])
	);

	expectedArguments(
		\Cake\View\ViewBuilder::addHelper(),
		0,
		'Bake.Bake',
		'Bake.DocBlock',
		'Breadcrumbs',
		'DebugKit.Credentials',
		'DebugKit.SimpleGraph',
		'DebugKit.Toolbar',
		'Flash',
		'Form',
		'Html',
		'IdeHelper.DocBlock',
		'Migrations.Migration',
		'Number',
		'Paginator',
		'Queue.Queue',
		'Queue.QueueProgress',
		'StateMachine.StateMachine',
		'Text',
		'Time',
		'Tools.Common',
		'Tools.Form',
		'Tools.Format',
		'Tools.Gravatar',
		'Tools.Html',
		'Tools.Meter',
		'Tools.Number',
		'Tools.Obfuscate',
		'Tools.Progress',
		'Tools.QrCode',
		'Tools.Text',
		'Tools.Time',
		'Tools.Timeline',
		'Tools.Tree',
		'Tools.Typography',
		'Tools.Url',
		'Url'
	);

	expectedArguments(
		\Cake\View\ViewBuilder::setLayout(),
		0,
		'DebugKit.dashboard',
		'DebugKit.mailer',
		'DebugKit.toolbar',
		'ajax',
		'default',
		'error'
	);

	expectedArguments(
		\Migrations\AbstractMigration::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\AbstractSeed::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\Table::addColumn(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\Table::addColumn(),
		1,
		argumentsSet('tableTypes')
	);

	expectedArguments(
		\Migrations\Table::changeColumn(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\Table::changeColumn(),
		1,
		argumentsSet('tableTypes')
	);

	expectedArguments(
		\Migrations\Table::hasColumn(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\Table::removeColumn(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\Table::renameColumn(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Phinx\Seed\AbstractSeed::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Queue\Model\Table\QueuedJobsTable::createJob(),
		0,
		'CostsExample',
		'Email',
		'Example',
		'ExceptionExample',
		'Execute',
		'MonitorExample',
		'ProcessMedia',
		'ProgressExample',
		'RetryExample',
		'SuperExample',
		'UniqueExample'
	);

	expectedArguments(
		\Queue\Model\Table\QueuedJobsTable::isQueued(),
		1,
		'CostsExample',
		'Email',
		'Example',
		'ExceptionExample',
		'Execute',
		'MonitorExample',
		'ProcessMedia',
		'ProgressExample',
		'RetryExample',
		'SuperExample',
		'UniqueExample'
	);

	expectedArguments(
		\__d(),
		0,
		'bake',
		'cake',
		'cake/twig_view',
		'debug_kit',
		'ide_helper',
		'migrations',
		'queue',
		'state_machine',
		'tools'
	);

	expectedArguments(
		\env(),
		0,
		'CGI_MODE',
		'COMPOSER_BINARY',
		'COMPOSER_ORIGINAL_INIS',
		'CONTENT_LENGTH',
		'CONTENT_TYPE',
		'DOCUMENT_ROOT',
		'DOCUMENT_URI',
		'GATEWAY_INTERFACE',
		'GIT_ASKPASS',
		'HOME',
		'HTTPS',
		'HTTP_ACCEPT',
		'HTTP_ACCEPT_ENCODING',
		'HTTP_ACCEPT_LANGUAGE',
		'HTTP_CONNECTION',
		'HTTP_COOKIE',
		'HTTP_HOST',
		'HTTP_USER_AGENT',
		'JAVA_HOME',
		'LANG',
		'LANGUAGE',
		'LC_ADDRESS',
		'LC_IDENTIFICATION',
		'LC_MEASUREMENT',
		'LC_MONETARY',
		'LC_NAME',
		'LC_NUMERIC',
		'LC_PAPER',
		'LC_TELEPHONE',
		'LESSCLOSE',
		'LESSOPEN',
		'LOGNAME',
		'LS_COLORS',
		'MAIL',
		'OLDPWD',
		'PATH',
		'PATH_TRANSLATED',
		'PHP_BINARY',
		'PHP_SELF',
		'PWD',
		'QUERY_STRING',
		'REDIRECT_STATUS',
		'REMOTE_ADDR',
		'REMOTE_PORT',
		'REQUEST_METHOD',
		'REQUEST_SCHEME',
		'REQUEST_TIME',
		'REQUEST_TIME_FLOAT',
		'REQUEST_URI',
		'SCRIPT_FILENAME',
		'SCRIPT_NAME',
		'SERVER_NAME',
		'SERVER_PORT',
		'SERVER_PROTOCOL',
		'SHELL',
		'SHLVL',
		'SSH_AUTH_SOCK',
		'SSH_CLIENT',
		'SSH_CONNECTION',
		'SSH_TTY',
		'TERM',
		'USER',
		'XDEBUG_HANDLER_SETTINGS',
		'XDG_RUNTIME_DIR',
		'XDG_SESSION_ID',
		'argc',
		'argv'
	);

	expectedArguments(
		\urlArray(),
		0,
		argumentsSet('routePaths')
	);

	registerArgumentsSet(
		'cacheEngines',
		'_cake_core_',
		'_cake_model_',
		'_cake_routes_',
		'default'
	);

	registerArgumentsSet(
		'routePaths',
		'DebugKit.Composer::checkDependencies',
		'DebugKit.Dashboard::index',
		'DebugKit.Dashboard::reset',
		'DebugKit.MailPreview::email',
		'DebugKit.MailPreview::index',
		'DebugKit.MailPreview::sent',
		'DebugKit.Panels::index',
		'DebugKit.Panels::view',
		'DebugKit.Requests::view',
		'DebugKit.Toolbar::clearCache',
		'Files::add',
		'Files::delete',
		'Files::edit',
		'Files::index',
		'Files::view',
		'Groups::add',
		'Groups::delete',
		'Groups::edit',
		'Groups::index',
		'Groups::view',
		'GroupsUsers::add',
		'GroupsUsers::delete',
		'GroupsUsers::edit',
		'GroupsUsers::index',
		'GroupsUsers::view',
		'Pages::display',
		'Queue.Admin/Queue::addJob',
		'Queue.Admin/Queue::hardReset',
		'Queue.Admin/Queue::index',
		'Queue.Admin/Queue::processes',
		'Queue.Admin/Queue::removeJob',
		'Queue.Admin/Queue::reset',
		'Queue.Admin/Queue::resetJob',
		'Queue.Admin/QueueProcesses::cleanup',
		'Queue.Admin/QueueProcesses::delete',
		'Queue.Admin/QueueProcesses::edit',
		'Queue.Admin/QueueProcesses::index',
		'Queue.Admin/QueueProcesses::terminate',
		'Queue.Admin/QueueProcesses::view',
		'Queue.Admin/QueuedJobs::data',
		'Queue.Admin/QueuedJobs::delete',
		'Queue.Admin/QueuedJobs::edit',
		'Queue.Admin/QueuedJobs::execute',
		'Queue.Admin/QueuedJobs::import',
		'Queue.Admin/QueuedJobs::index',
		'Queue.Admin/QueuedJobs::stats',
		'Queue.Admin/QueuedJobs::test',
		'Queue.Admin/QueuedJobs::view',
		'StateMachine.Admin/Graph::draw',
		'StateMachine.Admin/StateMachine::index',
		'StateMachine.Admin/StateMachine::overview',
		'StateMachine.Admin/StateMachine::process',
		'StateMachine.Admin/StateMachine::reset',
		'StateMachine.Admin/StateMachineItemStateLogs::delete',
		'StateMachine.Admin/StateMachineItemStateLogs::index',
		'StateMachine.Admin/StateMachineItemStateLogs::view',
		'StateMachine.Admin/StateMachineItemStates::delete',
		'StateMachine.Admin/StateMachineItemStates::index',
		'StateMachine.Admin/StateMachineItemStates::view',
		'StateMachine.Admin/StateMachineItems::delete',
		'StateMachine.Admin/StateMachineItems::index',
		'StateMachine.Admin/StateMachineItems::view',
		'StateMachine.Admin/StateMachineLocks::delete',
		'StateMachine.Admin/StateMachineLocks::index',
		'StateMachine.Admin/StateMachineLocks::view',
		'StateMachine.Admin/StateMachineProcesses::delete',
		'StateMachine.Admin/StateMachineProcesses::index',
		'StateMachine.Admin/StateMachineProcesses::view',
		'StateMachine.Admin/StateMachineTimeouts::delete',
		'StateMachine.Admin/StateMachineTimeouts::index',
		'StateMachine.Admin/StateMachineTimeouts::view',
		'StateMachine.Admin/StateMachineTransitionLogs::delete',
		'StateMachine.Admin/StateMachineTransitionLogs::index',
		'StateMachine.Admin/StateMachineTransitionLogs::view',
		'StateMachine.Admin/Trigger::event',
		'StateMachine.Admin/Trigger::eventForNewItem',
		'Tagged::add',
		'Tagged::delete',
		'Tagged::edit',
		'Tagged::index',
		'Tagged::view',
		'Tags::add',
		'Tags::delete',
		'Tags::edit',
		'Tags::index',
		'Tags::view',
		'Tools.ShuntRequest::language',
		'Users::add',
		'Users::delete',
		'Users::edit',
		'Users::index',
		'Users::view'
	);

	registerArgumentsSet(
		'tableNames',
		'files',
		'groups',
		'groups_users',
		'queue_processes',
		'queued_jobs',
		'state_machine_item_state_logs',
		'state_machine_item_states',
		'state_machine_items',
		'state_machine_locks',
		'state_machine_processes',
		'state_machine_timeouts',
		'state_machine_transition_logs',
		'tagged',
		'tags',
		'users'
	);

	registerArgumentsSet(
		'tableTypes',
		'biginteger',
		'binary',
		'binaryuuid',
		'bit',
		'blob',
		'boolean',
		'char',
		'date',
		'datetime',
		'decimal',
		'double',
		'enum',
		'float',
		'geometry',
		'integer',
		'json',
		'linestring',
		'longblob',
		'mediumblob',
		'point',
		'polygon',
		'set',
		'smallinteger',
		'string',
		'text',
		'time',
		'timestamp',
		'tinyblob',
		'tinyinteger',
		'uuid',
		'varbinary',
		'year'
	);

	registerArgumentsSet(
		'validationWhen',
		'create',
		'update'
	);

}
