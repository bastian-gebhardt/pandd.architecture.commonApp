#!/bin/bash

chmod +x lib/doxygen/doxygen
cd resources/doxygen
../../lib/doxygen/doxygen doxygen.cnf
cd ../..
