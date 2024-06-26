class Solution(object):
    def maxArea(self, height):
        """
        :type height: List[int]
        :rtype: int
        """
        volume = 0
        left = 0
        right = len(height) - 1
        while left < right:
            volume = max(volume, min(height[left], height[right]) * (right - left))
            if height[left] < height[right]:
                left += 1
            else:
                right -= 1

        return volume
