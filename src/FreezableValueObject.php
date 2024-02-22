<?php

declare( strict_types = 1 );

namespace WMDE\FreezableValueObject;

trait FreezableValueObject {

	private bool $isFrozen = false;

	public function freeze(): self {
		$this->isFrozen = true;
		return $this;
	}

	protected function assertIsWritable(): self {
		if ( $this->isFrozen ) {
			throw new \RuntimeException( 'Cannot write to a frozen object!' );
		}
		return $this;
	}

	public function assertNoNullFields(): self {
		foreach ( get_object_vars( $this ) as $fieldName => $fieldValue ) {
			if ( $fieldValue === null ) {
				throw new \RuntimeException( "Field '$fieldName' cannot be null" );
			}
		}
		return $this;
	}

}
