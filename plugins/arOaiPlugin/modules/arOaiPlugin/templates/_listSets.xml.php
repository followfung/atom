  <ListSets>
    <?php foreach($sets as $set): ?>
        <set>
           <setSpec><?php echo $set->setSpec() ?></setSpec>
           <setName><?php echo htmlspecialchars($set->getName()) ?></setName>
        </set>
    <?php endforeach ?>
  </ListSets>
