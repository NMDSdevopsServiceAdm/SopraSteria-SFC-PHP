
<div class="main-page-container col-12">

<form novalidate
      (ngSubmit)="onSubmit()"
      [formGroup]="loginForm">

  <h1 class="h1">Sign in</h1>

  <app-messages></app-messages>

  <div class="form-group mb-5">
    <div class="field-group mb-5">
      <label for="username" class="d-block">Username</label>
      <input type="text"
             placeholder=""
             id="username"
             formControlName="username"
             class="form-control col-12 col-lg-6"
             [ngClass]="{'is-invalid': (loginForm.get('username').touched ||
                                          loginForm.get('username').dirty) &&
                                          !loginForm.get('username').valid }" />
      <span class="invalid-feedback">
        <span *ngIf="loginForm.get('username').errors?.required" class="main-body-text">
          Please enter your Username.
        </span>
        <span *ngIf="loginForm.get('username').errors?.maxlength" class="main-body-text">
          The Username must be no longer than 3 characters.
        </span>
      </span>
    </div>
    <div class="field-group">
      <label for="password" class="d-block">Password</label>
      <input type="password"
             placeholder=""
             id="password"
             formControlName="password"
             class="form-control col-12 col-lg-6"
             [ngClass]="{'is-invalid': (loginForm.get('password').touched ||
                                          loginForm.get('password').dirty) &&
                                          !loginForm.get('password').valid }" />
      <span class="invalid-feedback">
        <span *ngIf="loginForm.get('password').errors?.required" class="main-body-text">
          Please enter your Password.
        </span>
        <span *ngIf="loginForm.get('password').errors?.maxlength" class="main-body-text">
          The Password must be no longer than 3 characters.
        </span>
      </span>
    </div>
  </div>

  <div class="btn-container">
    <button class="btn btn-primary">Sign In</button>
  </div>

</form>

<ul class="login-nav-list">
  <li><a routerLink="">Forgot your password?</a></li>
  <li><a routerLink="/registered-question" title="Create an account">Create an account</a></li>
</ul>

</div>
