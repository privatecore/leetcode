# Definition for a binary tree node.
# class TreeNode(object):
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution(object):
    def deleteNode(self, root, key):
        """
        :type root: TreeNode
        :type key: int
        :rtype: TreeNode
        """
        if not root:
            return None

        if root.val > key:
            root.left = self.deleteNode(root.left, key)
        elif root.val < key:
            root.right = self.deleteNode(root.right, key)
        else:
            if not root.left and not root.right: 
                return None
            if not root.left and root.right: 
                return root.right
            if root.left and not root.right: 
                return root.left

            # take predecessor and find out it's max node (max(root.left.right)),
            # another approach: get min node from successor (min(root.right.left))
            max_node = root.left
            while max_node.right: max_node = max_node.right
            root.val = max_node.val
            root.left = self.deleteNode(root.left, root.val)

        return root
