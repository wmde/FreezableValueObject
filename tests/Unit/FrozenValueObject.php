<?php

declare( strict_types = 1 );

namespace WMDE\FreezableValueObject\Tests\Unit;

use WMDE\FreezableValueObject\FreezableValueObject;

/**
 * @license GPL-2.0-or-later
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class FrozenValueObject {
	use FreezableValueObject;

	private ?string $mainContent = null;
	private ?string $headerContent = null;
	private ?string $footerContent = null;

	public function getMainContent(): string {
		if ( $this->mainContent === null ) {
			throw new \RuntimeException( "Field mainContent cannot be null" );
		}
		return $this->mainContent;
	}

	public function setMainContent( string $mainContent ): void {
		$this->assertIsWritable();
		$this->mainContent = $mainContent;
	}

	public function getHeaderContent(): string {
		if ( $this->headerContent === null ) {
			throw new \RuntimeException( "Field headerContent cannot be null" );
		}
		return $this->headerContent;
	}

	public function setHeaderContent( string $headerContent ): void {
		$this->assertIsWritable();
		$this->headerContent = $headerContent;
	}

	public function getFooterContent(): string {
		if ( $this->footerContent === null ) {
			throw new \RuntimeException( "Field footerContent cannot be null" );
		}
		return $this->footerContent;
	}

	public function setFooterContent( string $footerContent ): void {
		$this->assertIsWritable();
		$this->footerContent = $footerContent;
	}

}
