$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($userAgent, 'facebookexternalhit') !== false) {
  // This is a request from the Facebook crawler, so redirect to the masked URL
  header('Location: https://masked-url.com', true, 307);
  exit();
} else {
  // This is a regular user request, so redirect to the regular page content
  header('Location: https://example.com', true, 307);
  exit();
}
