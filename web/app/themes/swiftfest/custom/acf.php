<?php

if( function_exists('acf_add_local_field_group') ):

  // SECTION
  include __DIR__ . "/acf/acf-section.php";

  // TEAM
  include __DIR__ . "/acf/acf-team.php";

  // SUPPORTERS
  include __DIR__ . "/acf/acf-supporters.php";

  // HOMEPAGE
  include __DIR__ . "/acf/acf-homepage.php";

  // OPTIONS
  include __DIR__ . "/acf/acf-options.php";

endif;