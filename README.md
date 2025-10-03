# Login-Script
Dies ist ein Teil, meiner CMS-Reihe.
---
- Bitte die Userdaten ändern.
- Logout.php irgendwo in deinem Layout Verlinken. (Im geschützten Bereich).

In deine Index.php setzt du dann folgendes ganz oben ein:

	if (!isset($_SESSION['user'])) {
	    header('Location: login.php');
	    exit;
	}
	
Und das wars dann auch schon :)
