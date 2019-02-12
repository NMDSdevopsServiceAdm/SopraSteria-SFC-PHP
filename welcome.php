<?php include 'header.php'; ?>

<div id="app-main" class="container-fluid p-0">
  <main class="container" id="main-content" role="main">
    

  <div class="sub-page-container col-12">

  <h1 class="h1">Welcome {{ fullname }}</h1>

  <ng-template [ngIf]="isFirstLoggedIn" [ngIfElse]="welcomeBack">
    <p class="main-body-text mb-5 d-block col-12 col-md-10 p-0">This is the first time you've signed in to the service, so we need a few details from you about {{ establishmentName }}.</p>
    <p class="main-body-text mb-5 d-block col-12 col-md-10 p-0">We have some questions which shouldn't take more than a few minutes to answer.</p>
    <div class="btn-container">
      <button class="btn btn-primary" type="submit" (click)="welcomeContinue()">Continue</button>
    </div>
  </ng-template>

  <ng-template #welcomeBack>
    <p class="main-body-text mb-5 d-block col-12 col-md-10 p-0">Thank you for participating in the development of the new ASC-WDS service and for entering information about your establishment.
      When we have developed further, this page will become your homepage where there will be navigation to a range of tasks.
      These will be released periodically in the coming months.</p>
    <div class="btn-container">
        <button class="btn btn-primary" type="submit" (click)="tryagin()">Edit Establishment Information</button>
    </div>
    <div *ngIf="addWorkerBtnAvailable" class="btn-container">
      <button class="btn btn-primary" type="button" (click)="addWorker()" class="btn btn-primary">Add a worker</button>
    </div>
  </ng-template>


  </div>


  </main>
</div>

<?php include 'footer.php'; ?>