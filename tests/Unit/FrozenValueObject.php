<?php

declare( strict_types = 1 );

namespace WMDE\FreezableValueObject\Tests\Unit;

use WMDE\FreezableValueObject\FreezableValueObject;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class FrozenValueObject {
	use FreezableValueObject;

	private $mainContent;
	private $headerContent;
	private $footerContent;

	public function getMainContent(): string {
		return $this->mainContent;
	}

	public function setMainContent( string $mainContent ): void {
		$this->assertIsWritable();
		$this->mainContent = $mainContent;
	}

	public function getHeaderContent(): string {
		return $this->headerContent;
	}

	public function setHeaderContent( string $headerContent ): void {
		$this->assertIsWritable();
		$this->headerContent = $headerContent;
	}

	public function getFooterContent(): string {
		return $this->footerContent;
	}

	public function setFooterContent( string $footerContent ): void {
		$this->assertIsWritable();
		$this->footerContent = $footerContent;
	}

}
