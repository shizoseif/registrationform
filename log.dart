import 'dart:html';

Future<void> main() async {
  if (window.location.pathname!.endsWith('login.php')) {
    setuplogin();
  } else if (window.location.pathname!.endsWith('register.php')) {
    setupRegistrationForm();
  }
}