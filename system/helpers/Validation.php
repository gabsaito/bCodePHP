<?php

namespace system\helpers
{
    class Validation
    {
        /**
         * Filtros customizados para os dados dos inputs
         * @var array $customFilters
         */
        private $customFilters = array();

        /**
         * @param string $inputName
         * @param int $sanitizeFilter
         */
        public function setFilter($inputName, $sanitizeFilter)
        {

            if(is_string($sanitizeFilter))
            {
                $sanitizeFilter = constant($sanitizeFilter);
            }

            $this->customFilters[$inputName] = $sanitizeFilter;
        }

        /**
         * Faz a filtragem do request
         * @param array $request
         * @param int $inputType
         * @return array
         */
        public function filter($request, $inputType)
        {
            $filters = array();

            foreach ($request as $key => $value) {
                if(!array_key_exists($key, $this->customFilters))
                {
                    $filters[$key] = constant('FILTER_SANITIZE_STRING');
                }
            }

            if(count($this->customFilters) > 0)
            {
                $filters = array_merge($filters, $this->customFilters);
            }

            return filter_input_array($inputType, $filters);
        }
    }
}