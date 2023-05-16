import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { NavComponent } from './nav/nav.component';
import { LoginComponent } from './auth/login/login.component';
import { RegisterComponent } from './auth/register/register.component';
import { PersonComponent } from './data/person/person.component';
import { GroupComponent } from './data/group/group.component';
import { FieldComponent } from './data/field/field.component';
import { HeaderComponent } from './element/header/header.component';
import { FooterComponent } from './element/footer/footer.component';
import { CanvasComponent } from './canvas/canvas.component';
import { SetComponent } from './canvas/set/set.component';
import { ForgotPasswordComponent } from './auth/forgot-password/forgot-password.component';
import { LogoutComponent } from './auth/logout/logout.component';
import { ProfileComponent } from './auth/user/profile/profile.component';
import { PermissionComponent } from './auth/user/permission/permission.component';
import { UserManagementComponent } from './auth/admin/user-management/user-management.component';
import { UserPermissionComponent } from './auth/admin/user-permission/user-permission.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    NavComponent,
    LoginComponent,
    RegisterComponent,
    PersonComponent,
    GroupComponent,
    FieldComponent,
    HeaderComponent,
    FooterComponent,
    CanvasComponent,
    SetComponent,
    ForgotPasswordComponent,
    LogoutComponent,
    ProfileComponent,
    PermissionComponent,
    UserManagementComponent,
    UserPermissionComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
