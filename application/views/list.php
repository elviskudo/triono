<div ng-ctrl="ListCtrl()">
	<ul class="unstyled">
		<li ng-repeat="project in projects | filter:search | orderBy:'name'">
			<a class="view" ng-click="EditCtrl()">{{project.name}}</a>
		</li>
	</ul>
</div>
