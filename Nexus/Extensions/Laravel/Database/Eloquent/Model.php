<?php namespace Nexus\Extensions\Laravel\Database\Eloquent;

use Date,
    Eloquent;

abstract class Model extends Eloquent {

	/**
	 * Get a fresh timestamp for the model.
	 *
	 * We override this method from the Eloquent model so that we can ensure
	 * that every timestamp being generated is done so as UTC.
	 *
	 * @return mixed
	 */
	public function freshTimestamp()
	{
		return Date::now('UTC');
	}

	/**
	 * Return a timestamp as DateTime object.
	 *
	 * We override this method from the Eloquent model so that we can ensure
	 * that everything being stored in the database is being done so as UTC.
	 *
	 * @param	mixed	The value to store
	 * @return	Date
	 */
	protected function asDateTime($value)
	{
		if ( ! $value instanceof Date)
		{
			$format = $this->getDateFormat();

			return Date::createFromFormat($format, $value, 'UTC');
		}

		return $value;
	}

    /**
	 * Kick off a new query.
	 *
	 * @return	Builder
	 */
	public static function startQuery()
	{
		// Get a new instance of the model
		$instance = new static;

		return $instance->newQuery();
	}

	/*
	|--------------------------------------------------------------------------
	| Model Scopes
	|--------------------------------------------------------------------------
	*/

	/**
	 * Ascending order scope.
	 *
	 * @param	Builder		The query builder
	 * @param	string		The field to order by
	 * @return	void
	 */
	public function scopeOrderAsc($query, $orderBy)
	{
		$this->orderScope($query, $orderBy, 'asc');
	}

	/**
	 * Descending order scope.
	 *
	 * @param	Builder		The query builder
	 * @param	string		The field to order by
	 * @return	void
	 */
	public function scopeOrderDesc($query, $orderBy)
	{
		$this->orderScope($query, $orderBy, 'desc');
	}

	/**
	 * Do the ordering.
	 *
	 * @param	Builder		Query Builder object
	 * @param	mixed		A string or array of strings of columns
	 * @param	string		The direction to order
	 * @return	void
	 */
	protected function orderScope($query, $column, $direction)
	{
		if (is_array($column))
		{
			foreach ($column as $col)
			{
				$query->orderBy($col, $direction);
			}
		}
		else
		{
			$query->orderBy($column, $direction);
		}
	}

	/**
	 * Grouping scope.
	 *
	 * @param	Builder		The query builder
	 * @param	string		The field to group by
	 * @return	void
	 */
	public function scopeGroup($query, $groupBy)
	{
		$query->groupBy($groupBy);
	}

}
