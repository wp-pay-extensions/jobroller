<?php

/**
 * Title: JobRoller
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Extensions_JobRoller_JobRoller {
	/**
	 * Check if JobRoller is active (Automattic/developer style)
	 *
	 * @see https://github.com/Automattic/developer/blob/1.1.2/developer.php#L73
	 *
	 * @return boolean
	 */
	public static function is_active() {
		return defined( 'APP_TD' ) && 'jobroller' === APP_TD;
	}
}
