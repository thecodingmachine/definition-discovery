# Definitions discovery for *definition-interop*

This package contains an interface and Puli binding-types to automatically discover definition providers.

## Introduction

Modules (aka packages or bundles) are widespread in modern frameworks. Unfortunately each framework has its own convention and tools for writing them. The goal of *container-interop* and more specifically [*definition-interop*](https://github.com/container-interop/definition-interop/) is to help developers write modules that can work in any framework.

In *definition-interop*, definition provider objects (implementing the `DefinitionProviderInterface`) can return sets of
definitions. This package proposes a default interface for factories of definition providers.
  
This factory is static and can be automatically detected by Puli using class discovery.

The goal is to allow containers to automatically detect and create definition provider instances.

## Installation

```
composer require container-interop/definition-discovery@dev
```

This package adheres to the [SemVer](http://semver.org/) specification and will be fully backward compatible between minor versions.
