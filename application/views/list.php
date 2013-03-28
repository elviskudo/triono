<div ng-controller="ListCtrl">
	<ul class="unstyled">
		<li ng-repeat="project in projects | filter:search | orderBy:'name'">
			<a href="projects#/edit/{{project.id}}">{{project.name}}</a>
			<div>
				{{project.description}}
			</div>
			<a href="{{project.site}}">{{project.site}}</a>
		</li>
	</ul>
</div>
