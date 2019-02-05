# --------------------------------------
# | Fluid Styled Content Configuration |
# --------------------------------------

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/Static/setup.txt">

lib {
  fluidContent {
    layoutRootPath = {$lib.fluidContent.layoutRootPath}

    # Used to define several paths for layouts, which will be tried in reversed order (the paths are searched from
    # bottom to top). The first folder where the desired layout is found, is used. If the array keys are numeric,
    # they are first sorted and then tried in reversed order.
    layoutRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Layouts/

      10 = {$lib.fluidContent.layoutRootPath}
    }

    templateRootPath = {$lib.fluidContent.templateRootPath}

    # Used to define several paths for templates, which will be tried in reversed order (the paths are searched from
    # bottom to top). The first folder where the desired layout is found, is used. If the array keys are numeric,
    # they are first sorted and then tried in reversed order.
    templateRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Templates/

      10 = {$lib.fluidContent.templateRootPath}
    }

    partialRootPath = {$lib.fluidContent.partialRootPath}

    # Used to define several paths for partials, which will be tried in reversed order. The first folder where the
    # desired partial is found, is used. The keys of the array define the order.
    partialRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Partials/

      10 = {$lib.fluidContent.partialRootPath}
    }
  }
}
