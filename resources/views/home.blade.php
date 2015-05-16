@extends('layout.default')

@section('content')

    <div class="ui center aligned grid" ng-controller="HomeCtrl">
        <div class="six wide column">

            <div class="ui piled segment fx-fade-normal" ng-class="{'loading': requestPromise && !requestPromise.$$state.status}">

                <div ng-show="!showSuccess">
                    <h1 class="ui center aligner icon header"><i class="circular mail outline icon"></i>This is a awesome subscribe page!</h1>
                    <p>Be the first to subscribe and get the news about our project.</p>

                    <form style="margin-bottom: 20px" name="formSubscribe" novalidate="novalidate" ng-submit="subscribe(formSubscribe)">
                        <div class="field">
                            <div class="ui left icon action input" ng-class="{'error': (formSubscribe.email.$dirty && formSubscribe.email.$invalid) || (formSubscribe.email.$invalid && formSubscribe.submitted)}">
                                <input required="required" type="email" placeholder="Your e-mail" name="email" id="email" ng-model="user.email">
                                <i class="lock icon"></i>
                                <button type="submit" class="ui positive button">Subscribe</button>
                            </div>
                        </div>
                        <div class="ui red pointing above ui label fx-fade-normal" ng-show="(formSubscribe.email.$invalid && formSubscribe.submitted)">
                            Please, enter a valid e-mail address
                        </div>
                    </form>

                    <small>Just like you, we hate spam too. We will only use your contact details to send you our news about the project.</small>
                    <br/><br/>
                </div>

                <div style="margin: 20px 0px" class="fx-fade-normal" ng-show="showSuccess">
                    <h2 class="ui center aligned icon header">
                        <i class="check icon green"></i>
                        Obrigado por se cadastrar.
                        <br/>
                        Em breve mais novidades.
                    </h2>
                </div>

            </div>
            <small>
                Made with <i class="icon heart red"></i> in Maringá, Brasil by <a href="https://github.com/renatopeterman">Renato Peterman</a>
            </small>
        </div>

        <!-- Error modal -->
        <modal class="ui basic small modal" ng-model="showModal">
            <i class="close icon"></i>
            <div class="header">
                Error saving e-mail
            </div>
            <div class="content">
                <div class="image">
                    <i class="icon circle warning"></i>
                </div>
                <div class="description">
                    <a ng-click="showAlert()"></a>
                    <ul>
                        <li ng-repeat="error in errors"><% error %></li>
                    </ul>
                </div>
            </div>
            <div class="actions">
                <div class="ui inverted green button">Try again</div>
            </div>
        </modal>

    </div>

@stop